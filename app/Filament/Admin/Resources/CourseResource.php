<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CourseResource\Pages;
use App\Models\Course;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationGroup = 'Learning';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Course Overview')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),
                        Forms\Components\TextInput::make('full_title')
                            ->maxLength(255),
                        Forms\Components\Select::make('category')
                            ->options([
                                'OSN' => 'OSN',
                                'UTBK' => 'UTBK',
                                'TKA' => 'TKA',
                            ])
                            ->required(),
                        Forms\Components\TextInput::make('subject')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('level')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('price')
                            ->maxLength(255)
                            ->default('Gratis'),
                        Forms\Components\Textarea::make('short_description')
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(2),

                Forms\Components\Section::make('Course Details')
                    ->schema([
                        Forms\Components\TagsInput::make('tags'),
                        Forms\Components\TagsInput::make('highlights'),
                        Forms\Components\TagsInput::make('disclaimer_sources'),
                        Forms\Components\RichEditor::make('about_course')
                            ->columnSpanFull(),
                        Forms\Components\RichEditor::make('about_text')
                            ->columnSpanFull(),
                        Forms\Components\RichEditor::make('mentors_text')
                            ->columnSpanFull(),
                    ])->columns(2),

                Forms\Components\Section::make('Content Sections')
                    ->schema([
                        Forms\Components\Repeater::make('content_sections')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required(),
                                Forms\Components\Repeater::make('items')
                                    ->schema([
                                        Forms\Components\TextInput::make('name')->required(),
                                        Forms\Components\TextInput::make('duration'),
                                        Forms\Components\TextInput::make('type'),
                                    ])
                                    ->columns(3)
                                    ->defaultItems(1)
                            ])
                            ->columnSpanFull()
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category')
                    ->searchable()
                    ->badge(),
                Tables\Columns\TextColumn::make('subject')
                    ->searchable(),
                Tables\Columns\TextColumn::make('level')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
