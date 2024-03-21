<?php
function randnum($panjang)
{
    $karakter = '1234567890';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
        $pos = rand(0, strlen($karakter) - 1);
        $string .= $karakter[$pos];
    }
    return $string;
}

function random($panjang)
{
    $karakter = '1234567890abcdefghijklmnopqrstuvwxyz';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
        $pos = rand(0, strlen($karakter) - 1);
        $string .= $karakter[$pos];
    }
    return $string;
}

function kodet($long)
{
    $karakters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $strings = '';
    for ($is = 0; $is < $long; $is++) {
        $poss = rand(0, strlen($karakters) - 1);
        $strings .= $karakters[$poss];
    }
    return $strings;
}

function getDatesFromRange($start, $end)
{
    $dates = array($start);
    while (end($dates) < $end) {
        $dates[] = date('Y-m-d', strtotime(end($dates) . ' +1 day'));
    }
    return $dates;
}

function indoDate($date)
{
    $exp = explode("-", substr($date, 0, 10));
    return $exp[2] . ' ' . month($exp[1]) . ' ' . $exp[0];
}

function periode($date)
{
    $exp = explode("-", substr($date, 0, 10));
    return month($exp[1]) . ' ' . $exp[0];
}

/**
 * Fungsi untuk mengkonversi format bulan angka menjadi nama bulan.
 */
function month($kode)
{
    $month = '';
    switch ($kode) {
        case '01':
            $month = 'Januari';
            break;
        case '02':
            $month = 'Februari';
            break;
        case '03':
            $month = 'Maret';
            break;
        case '04':
            $month = 'April';
            break;
        case '05':
            $month = 'Mei';
            break;
        case '06':
            $month = 'Juni';
            break;
        case '07':
            $month = 'Juli';
            break;
        case '08':
            $month = 'Agustus';
            break;
        case '09':
            $month = 'September';
            break;
        case '10':
            $month = 'Oktober';
            break;
        case '11':
            $month = 'November';
            break;
        case '12':
            $month = 'Desember';
            break;
    }
    return $month;
}

function getRomawi($bln)
{
    switch ($bln) {
        case 1:
            return "I";
            break;
        case 2:
            return "II";
            break;
        case 3:
            return "III";
            break;
        case 4:
            return "IV";
            break;
        case 5:
            return "V";
            break;
        case 6:
            return "VI";
            break;
        case 7:
            return "VII";
            break;
        case 8:
            return "VIII";
            break;
        case 9:
            return "IX";
            break;
        case 10:
            return "X";
            break;
        case 11:
            return "XI";
            break;
        case 12:
            return "XII";
            break;
    }
}

function Terbilang($x)
{
    $abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    if ($x < 12)
        return " " . $abil[$x];
    elseif ($x < 20)
        return Terbilang($x - 10) . "belas";
    elseif ($x < 100)
        return Terbilang($x / 10) . " puluh" . Terbilang($x % 10);
    elseif ($x < 200)
        return " seratus" . Terbilang($x - 100);
    elseif ($x < 1000)
        return Terbilang($x / 100) . " ratus" . Terbilang($x % 100);
    elseif ($x < 2000)
        return " seribu" . Terbilang($x - 1000);
    elseif ($x < 1000000)
        return Terbilang($x / 1000) . " ribu" . Terbilang($x % 1000);
    elseif ($x < 1000000000)
        return Terbilang($x / 1000000) . " juta" . Terbilang($x % 1000000);
}
