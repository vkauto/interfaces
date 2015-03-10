<?php

namespace VKauto\Interfaces;

interface WorkerInterface
{
	/**
	 * Метод, отвечающий за начало работы воркера
	 */
	public function start();

	/**
	 * Останавлиает работу воркера
	 */
	public function stop();

	/**
	 * Здесь указывается, нужно ли передавать воркеру последним аргументом VKauto\Auth\Account
	 * @return bool
	 */
	public function needsAccountClass();
}
