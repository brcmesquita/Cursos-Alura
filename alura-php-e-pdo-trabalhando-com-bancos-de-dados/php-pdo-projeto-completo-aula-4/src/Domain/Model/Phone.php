<?php

namespace Alura\Pdo\Domain\Model;

class Phone
{
	/**
	 * @var int|null
	 */
	private ?int $id;
	/**
	 * @var string
	 */
	private string $areaCode;
	/**
	 * @var string
	 */
	private string $number;

	public function __construct(?int $id, string $areaCode, string $number)
	{
		$this->id = $id;
		$this->areaCode = $areaCode;
		$this->number = $number;
	}

	public function formattedPhone(): string
	{
		return "($this->areaCode) $this->number";
	}
}