<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PatientResource\Pages;
use App\Filament\Resources\PatientResource\RelationManagers;
use App\Models\Patient;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PatientResource extends Resource {

	protected static ?string $model = Patient::class;

	protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

	public static function form( Form $form ): Form {
		return $form
			->schema(
				array(
					Forms\Components\TextInput::make( 'name' )
					->required()
					->maxLength( 255 ),
					Forms\Components\Select::make( 'type' )
					->options(
						array(
							'cat'    => 'Cat',
							'dog'    => 'Dog',
							'rabbit' => 'Rabbit',
						)
					),
					Forms\Components\DatePicker::make( 'date_of_birth' )
					->required()
					->maxDate( now() ),
					Forms\Components\Select::make( 'owner_id' )
					->relationship( 'owner', 'name' )
					->searchable()
					->preload()
					->createOptionForm(
						array(
							Forms\Components\TextInput::make( 'name' )
							->required()
							->maxLength( 255 ),
							Forms\Components\TextInput::make( 'email' )
							->label( 'Email address' )
							->email()
							->required()
							->maxLength( 255 ),
							Forms\Components\TextInput::make( 'phone' )
							->label( 'Phone number' )
							->tel()
							->required(),
						)
					)
					->required(),

				)
			);
	}

	public static function table( Table $table ): Table {
		return $table
			->columns(
				array(
					Tables\Columns\TextColumn::make( 'name' ),
					Tables\Columns\TextColumn::make( 'type' ),
					Tables\Columns\TextColumn::make( 'date_of_birth' ),
					Tables\Columns\TextColumn::make( 'owner.name' ),
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
			'index'  => Pages\ListPatients::route( '/' ),
			'create' => Pages\CreatePatient::route( '/create' ),
			'edit'   => Pages\EditPatient::route( '/{record}/edit' ),
		);
	}
}
