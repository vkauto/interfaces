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
}
