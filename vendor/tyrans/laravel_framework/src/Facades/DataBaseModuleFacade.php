<?php

namespace Tyrans\Framework\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Tyrans\Framework\DataBaseModule find($where, $with = [])
 * @method static \Tyrans\Framework\DataBaseModule create(array $params)
 * @method static \Tyrans\Framework\DataBaseModule delete($where)
 *
 * @method static \Illuminate\Database\Eloquent\Builder getModelQuery()
 *
 * Class JsonResponse
 * @package Tyrans\Framework\Facades
 */
abstract class DataBaseModuleFacade extends Facade {}
