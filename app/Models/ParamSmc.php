<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 14 Mar 2018 15:08:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ParamSmc
 * 
 * @property string $PARAMETER_NAME
 * @property string $PARAMETER_DESCRIPTION
 * @property string $TEXT_VALUE
 * @property float $INITIAL_NUMERIC_VALUE
 * @property float $FINAL_NUMERIC_VALUE
 * @property \Carbon\Carbon $INITIAL_DATE_VALUE
 * @property \Carbon\Carbon $FINAL_DATE_VALUE
 * @property boolean $BLOB_VALUE
 * @property string $CLOB_VALUE
 * @property string $DATA_TYPE
 * @property float $ID_PARAMETER
 *
 * @package App\Models
 */
class ParamSmc extends Eloquent
{
	protected $table = 'param_smc';
	protected $primaryKey = 'ID_PARAMETER';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'INITIAL_NUMERIC_VALUE' => 'float',
		'FINAL_NUMERIC_VALUE' => 'float',
		'BLOB_VALUE' => 'boolean',
		'ID_PARAMETER' => 'float'
	];

	protected $dates = [
		'INITIAL_DATE_VALUE',
		'FINAL_DATE_VALUE'
	];

	protected $fillable = [
		'PARAMETER_NAME',
		'PARAMETER_DESCRIPTION',
		'TEXT_VALUE',
		'INITIAL_NUMERIC_VALUE',
		'FINAL_NUMERIC_VALUE',
		'INITIAL_DATE_VALUE',
		'FINAL_DATE_VALUE',
		'BLOB_VALUE',
		'CLOB_VALUE',
		'DATA_TYPE'
	];
}
