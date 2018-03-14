<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 14 Mar 2018 15:08:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AssessmentPlanLog
 * 
 * @property float $ID_ASSESSMENT_PLAN_LOG
 * @property \Carbon\Carbon $CREATION_DATE
 * @property float $ID_USER
 * @property \Carbon\Carbon $EVALUATION_DATE
 * @property string $EVALUATION_FREQUENCY
 * @property float $ID_PERIOD
 * @property float $ID_STATE
 * @property float $ID_CYCLE
 * @property float $ID_STUDENT_OUTCOME
 * @property string $LOG_ACTION
 * @property \Carbon\Carbon $ACTION_DATE
 * @property float $LAST_ID_STATE
 *
 * @package App\Models
 */
class AssessmentPlanLog extends Eloquent
{
	protected $table = 'assessment_plan_log';
	protected $primaryKey = 'ID_ASSESSMENT_PLAN_LOG';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_ASSESSMENT_PLAN_LOG' => 'float',
		'ID_USER' => 'float',
		'ID_PERIOD' => 'float',
		'ID_STATE' => 'float',
		'ID_CYCLE' => 'float',
		'ID_STUDENT_OUTCOME' => 'float',
		'LAST_ID_STATE' => 'float'
	];

	protected $dates = [
		'CREATION_DATE',
		'EVALUATION_DATE',
		'ACTION_DATE'
	];

	protected $fillable = [
		'CREATION_DATE',
		'ID_USER',
		'EVALUATION_DATE',
		'EVALUATION_FREQUENCY',
		'ID_PERIOD',
		'ID_STATE',
		'ID_CYCLE',
		'ID_STUDENT_OUTCOME',
		'LOG_ACTION',
		'ACTION_DATE',
		'LAST_ID_STATE'
	];
}
