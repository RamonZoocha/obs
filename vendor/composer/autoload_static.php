<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc84d877964fdcbdbfc6297306aecad8b
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
        'K' => 
        array (
            'Klein\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
        'Klein\\' => 
        array (
            0 => __DIR__ . '/..' . '/klein/klein/src/Klein',
        ),
    );

    public static $classMap = array (
        'HG_Parser' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Compiler/Tokenizer.php',
        'Haanga' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga.php',
        'Haanga_AST' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/AST.php',
        'Haanga_Compiler' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Compiler.php',
        'Haanga_Compiler_Exception' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Compiler/Exception.php',
        'Haanga_Compiler_Parser' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Compiler/Parser.php',
        'Haanga_Compiler_Runtime' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Compiler/Runtime.php',
        'Haanga_Compiler_Tokenizer' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Compiler/Tokenizer.php',
        'Haanga_Exception' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Exception.php',
        'Haanga_Extension' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension.php',
        'Haanga_Extension_Filter' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter.php',
        'Haanga_Extension_Filter_Capfirst' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Capfirst.php',
        'Haanga_Extension_Filter_Count' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Count.php',
        'Haanga_Extension_Filter_Cut' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Cut.php',
        'Haanga_Extension_Filter_Date' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Date.php',
        'Haanga_Extension_Filter_Default' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Default.php',
        'Haanga_Extension_Filter_Dictsort' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Dictsort.php',
        'Haanga_Extension_Filter_Divisibleby' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Divisibleby.php',
        'Haanga_Extension_Filter_Empty' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Empty.php',
        'Haanga_Extension_Filter_Escape' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Escape.php',
        'Haanga_Extension_Filter_Exists' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Exists.php',
        'Haanga_Extension_Filter_Explode' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Explode.php',
        'Haanga_Extension_Filter_Hostname' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Hostname.php',
        'Haanga_Extension_Filter_IsArray' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Isarray.php',
        'Haanga_Extension_Filter_Join' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Join.php',
        'Haanga_Extension_Filter_Json' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Json.php',
        'Haanga_Extension_Filter_Length' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Length.php',
        'Haanga_Extension_Filter_Linebreaksbr' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Linebreaksbr.php',
        'Haanga_Extension_Filter_Lower' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Lower.php',
        'Haanga_Extension_Filter_Null' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Null.php',
        'Haanga_Extension_Filter_Pluralize' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Pluralize.php',
        'Haanga_Extension_Filter_Reverse' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Reverse.php',
        'Haanga_Extension_Filter_Safe' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Safe.php',
        'Haanga_Extension_Filter_Slugify' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Slugify.php',
        'Haanga_Extension_Filter_StringFormat' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Stringformat.php',
        'Haanga_Extension_Filter_Substr' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Substr.php',
        'Haanga_Extension_Filter_Title' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Title.php',
        'Haanga_Extension_Filter_Trans' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Trans.php',
        'Haanga_Extension_Filter_Translation' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Translation.php',
        'Haanga_Extension_Filter_Trim' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Trim.php',
        'Haanga_Extension_Filter_Truncatechars' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Truncatechars.php',
        'Haanga_Extension_Filter_Truncatewords' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Truncatewords.php',
        'Haanga_Extension_Filter_Upper' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Upper.php',
        'Haanga_Extension_Filter_UrlEncode' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Urlencode.php',
        'Haanga_Extension_Filter_intval' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Filter/Intval.php',
        'Haanga_Extension_Tag' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Tag.php',
        'Haanga_Extension_Tag_Buffer' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Tag/Buffer.php',
        'Haanga_Extension_Tag_CurrentTime' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Tag/Currenttime.php',
        'Haanga_Extension_Tag_Cycle' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Tag/Cycle.php',
        'Haanga_Extension_Tag_Dictsort' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Tag/Dictsort.php',
        'Haanga_Extension_Tag_Exec' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Tag/Exec.php',
        'Haanga_Extension_Tag_FirstOf' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Tag/Firstof.php',
        'Haanga_Extension_Tag_Inline' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Tag/Inline.php',
        'Haanga_Extension_Tag_Lower' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Tag/Lower.php',
        'Haanga_Extension_Tag_Min' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Tag/Min.php',
        'Haanga_Extension_Tag_SetSafe' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Tag/Setsafe.php',
        'Haanga_Extension_Tag_Spaceless' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Tag/Spaceless.php',
        'Haanga_Extension_Tag_Templatetag' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Tag/Templatetag.php',
        'Haanga_Extension_Tag_Trans' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Tag/Trans.php',
        'Haanga_Extension_Tag_Tryinclude' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Tag/Tryinclude.php',
        'Haanga_Extension_Tag_Upper' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Extension/Tag/Upper.php',
        'Haanga_Generator_PHP' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Generator/PHP.php',
        'Haanga_yyStackEntry' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Compiler/Parser.php',
        'Haanga_yyToken' => __DIR__ . '/..' . '/crodas/haanga/lib/Haanga/Compiler/Parser.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc84d877964fdcbdbfc6297306aecad8b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc84d877964fdcbdbfc6297306aecad8b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc84d877964fdcbdbfc6297306aecad8b::$classMap;

        }, null, ClassLoader::class);
    }
}