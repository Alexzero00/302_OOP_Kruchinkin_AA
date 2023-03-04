<?php

class Fraction
{
    private int $numer;
    private int $denum;

    private function greatestCommonDivisor(int $n, int $m): int
    {
        while (true) {
            if ($n == $m) {
                return $m;
            }
            if ($n > $m) {
                $n -= $m;
            } else {
                $m -= $n;
            }
        }
    }

    public function __construct(int $numer, int $denum)
    {
        try {
            if (!is_int($numer)) {
                throw new Exception("Numerator of the wrong type", 1);
            } elseif (!is_int($denum)) {
                throw new Exception("Denominator of the wrong type", 1);
            }
            if ($denum == 0) {
                throw new Exception("Denominator is zero", 1);
            }

            if ($numer == 0) {
                $this->numer = 0;
                $this->denum = 1;
                return;
            }

            if ($numer < 0 and $denum < 0) {
                $this->numer = -$numer;
                $this->denum = -$denum;
            } elseif ($numer > 0 and $denum < 0) {
                $this->numer = -$numer;
                $this->denum = -$denum;
            } else {
                $this->numer = $numer;
                $this->denum = $denum;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            exit();
        }

        $n = $this->numer < 0 ? -$this->numer : $this->numer;
        $m = $this->denum < 0 ? -$this->denum : $this->denum;

        $gcd = $this->greatestCommonDivisor($n, $m);
        $this->numer /= $gcd;
        $this->denum /= $gcd;
    }

    public function getNumer(): int
    {
        return $this->numer;
    }

    public function getDenom(): int
    {
        return $this->denum;
    }


    public function add(Fraction $frac): Fraction
    {
        $numer = $this->numer * $frac->getDenom() + $this->denum * $frac->getNumer();
        $denum = $this->denum * $frac->getDenom();

        return new Fraction($numer, $denum);
    }

    public function sub(Fraction $frac): Fraction
    {
        $numer = $this->numer * $frac->getDenom() - $this->denum * $frac->getNumer();
        $denum = $this->denum * $frac->getDenom();

        return new Fraction($numer, $denum);
    }

    public function mult(Fraction $frac): Fraction
    {
        return new Fraction($this->numer * $frac->getNumer(), $this->denum * $frac->getDenom());
    }

    public function div(Fraction $frac): Fraction
    {
        return new Fraction($this->numer * $frac->getDenom(), $this->denum * $frac->getNumer());
    }

    public function pow(int $exp): Fraction
    {
        return new Fraction($this->numer ** $exp, $this->denum ** $exp);
    }

    public function __toString(): string
    {
        if ($this->numer == 0) {
            return 0 . "'";
        }

        $integer_part = (int) ($this->numer / $this->denum);

        if ($integer_part == 0) {
            return $this->numer . "/" . $this->denum;
        } else {
            if ($this->numer % $this->denum != 0) {
                return $integer_part . "'" . abs($this->numer % $this->denum) . "/" . $this->denum;
            } else {
                return $integer_part . "'";
            }
        }
    }
}