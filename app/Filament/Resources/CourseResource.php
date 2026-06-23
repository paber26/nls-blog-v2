<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Models\Course;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('full_title')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('subject')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('category')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('level')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('price')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('enrolled')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('last_updated')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Toggle::make('certificate')
                    ->required(),
                Forms\Components\TextInput::make('instructor')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('instructor_role')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('short_description')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('about')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('highlights')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('disclaimer_sources')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('tags')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('content_sections')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('full_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subject')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category')
                    ->searchable(),
                Tables\Columns\TextColumn::make('level')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->searchable(),
                Tables\Columns\TextColumn::make('enrolled')
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_updated')
                    ->searchable(),
                Tables\Columns\IconColumn::make('certificate')
                    ->boolean(),
                Tables\Columns\TextColumn::make('instructor')
                    ->searchable(),
                Tables\Columns\TextColumn::make('instructor_role')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
