<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource {

	protected static ?string $model = Post::class;

	protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

	public static function form( Form $form ): Form {
        return $form
        ->schema([
            Forms\Components\TextInput::make('name')
            ->required()
            ->maxLength(255),
            Forms\Components\TextInput::make('description')
            ->required()
            ->maxLength(255),
            Forms\Components\TextInput::make('notes')
            ->required()
            ->maxLength(255),
            Forms\Components\Select::make('owner_id')
            ->relationship('owner', 'name')
        
        ]);
	}

	public static function table( Table $table ): Table {
		return $table
			->columns(
				array(
                    Tables\Columns\TextColumn::make('name'),
                    Tables\Columns\TextColumn::make('date_of_birth'),
                    Tables\Columns\TextColumn::make('owner.name'),
				)
			)
			->filters(
				array()
			)
			->actions(
				array(
					Tables\Actions\EditAction::make(),
				)
			)
			->bulkActions(
				array(
					Tables\Actions\BulkActionGroup::make(
						array(
							Tables\Actions\DeleteBulkAction::make(),
						)
					),
				)
			);
	}

	public static function getRelations(): array {
		return array();
	}

	public static function getPages(): array {
		return array(
			'index'  => Pages\ListPosts::route( '/' ),
			'create' => Pages\CreatePost::route( '/create' ),
			'edit'   => Pages\EditPost::route( '/{record}/edit' ),
		);
	}
}
