<?php
/*************************************************************************************
 * qb64.php
 * ----------
 * Author: Fellippe Heitor (fellippe@qb64.org)
 * Copyright: (c) 2020 Fellippe Heitor (https://qb64.org/)
 * Release Version: 1.0.9.2
 * Date Started: 2019/04/27
 *
 * QB64 language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2020/04/21
 *  -  Tweaks to comply with latest version of geshi.
 * 2020/02/25
 *  -  New keywords for QB64 v1.4. (Fellippe Heitor)
 * 2019/04/27
 *  -  Modifications for QB64 based on Nigel McNie's work on qbasic.php
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/
$language_data = array (
    'LANG_NAME' => 'QB64',
    'COMMENT_SINGLE' => array(1 => "'"),
    'COMMENT_MULTI' => array(),
    'COMMENT_REGEXP' => array(
        //Single-Line Comments using REM command
        2 => "/\bREM\b.*?$/i",
        //Line numbers
        3 => "/^\s*\d+/im"
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_UPPER,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC | GESHI_NUMBER_FLT_NONSCI |
        GESHI_NUMBER_FLT_NONSCI_F | GESHI_NUMBER_FLT_SCI_SHORT |
        GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        1 => array(
            'DO', 'LOOP', 'WHILE', 'WEND', 'THEN', 'ELSE', 'ELSEIF', 'IF',
            'FOR', 'TO', 'NEXT', 'STEP', 'GOTO', 'GOSUB', 'CALL', 'CALLS',
            'SUB', 'FUNCTION', 'RETURN', 'RESUME', 'SELECT', 'CASE', 'UNTIL',
            'ONLY', 'ABS', 'ABSOLUTE', 'ACCESS',
            'ALIAS', 'AND', 'APPEND', 'AS', 'ASC', 'ATN', 'BASE', 'BEEP', 'BINARY', 'BLOAD',
            'BSAVE', 'BYVAL', 'IS', 'CDBL', 'CDECL', 'CHAIN', 'CHDIR', 'CHR$', 'CINT', 'CIRCLE',
            'CLEAR', 'CLNG', 'CLOSE', 'CLS', 'COLOR', 'COM', 'COMMAND$', 'COMMON', 'CONST',
            'COS', 'CSNG', 'CSRLIN', 'CUSTOMTYPE', 'CVD', 'CVDMBF', 'CVI', 'CVL', 'CVS',
            'CVSMBF', 'DATA', 'DATE$', 'DECLARE', 'DEF', 'DEFDBL', 'DEFINT', 'DEFLNG', 'DEFSNG',
            'DEFSTR', 'DIM', 'DOUBLE', 'DRAW', 'DYNAMIC', 'END', 'ENDIF', 'ENVIRON', 'ENVIRON$',
            'EOF', 'EQV', 'ERASE', 'ERDEV', 'ERDEV$', 'ERL', 'ERR', 'ERROR', 'EVERYCASE',
            'EXIT', 'EXP', 'FIELD', 'FILEATTR', 'FILES', 'FIX', 'FN', 'FRE', 'FREE', 'FREEFILE',
            'GET', 'HEX$', 'IMP', 'INKEY$', 'INP', 'INPUT', 'INPUT$', 'INSTR', 'INT', 'INTEGER',
            'INTERRUPT', 'INTERRUPTX', 'IOCTL', 'IOCTL$', 'KEY', 'KILL', 'LBOUND', 'LCASE$',
            'LEFT$', 'LEN', 'LET', 'LIBRARY', 'LINE', 'LIST', 'LOC', 'LOCATE', 'LOCK', 'LOF',
            'LOG', 'LONG', 'LPOS', 'LPRINT', 'LSET', 'LTRIM$', 'MID$', 'MKD$', 'MKDIR',
            'MKDMBF$', 'MKI$', 'MKL$', 'MKS$', 'MKSMBF$', 'MOD', 'NAME', 'NOT', 'OCT$',
            'OFF', 'ON', 'OPEN', 'OPTION', 'OR', 'OUT', 'OUTPUT', 'PAINT', 'PALETTE', 'PCOPY',
            'PEEK', 'PEN', 'PLAY', 'PMAP', 'POINT', 'POKE', 'POS', 'PRESET', 'PRINT', 'PSET',
            'PUT', 'RANDOM', 'RANDOMIZE', 'READ', 'REDIM', 'REM', 'RESET', 'RESTORE', 'RIGHT$',
            'RMDIR', 'RND', 'RSET', 'RTRIM$', 'RUN', 'SADD', 'SCREEN', 'SEEK', 'SEG', 'SETMEM',
            'SGN', 'SHARED', 'SHELL', 'SIGNAL', 'SIN', 'SINGLE', 'SLEEP', 'SOUND', 'SPACE$',
            'SPC', 'SQR', 'STATIC', 'STICK', 'STOP', 'STR$', 'STRIG', 'STRING', 'STRING$',
            'SWAP', 'SYSTEM', 'TAB', 'TAN', 'TIME$', 'TIMER', 'TROFF', 'TRON', 'TYPE', 'UBOUND',
            'UCASE$', 'UEVENT', 'UNLOCK', 'USING', 'VAL', 'VARPTR', 'VARPTR$', 'VARSEG',
            'VIEW', 'WAIT', 'WIDTH', 'WINDOW', 'WRITE', 'XOR', '_ACOS', '_ACOSH', '_ALPHA',
            '_ALPHA32', '_ARCCOT', '_ARCCSC', '_ARCSEC', '_ASIN', '_ASINH', '_ATAN2', '_ATANH',
            '_AUTODISPLAY', '_AXIS', '_BACKGROUNDCOLOR', '_BIT', '_BLEND', '_BLINK', '_BLUE',
            '_BLUE32', '_BUTTON', '_BUTTONCHANGE', '_BYTE', '_CEIL', '_CLEARCOLOR', '_CLIP',
            '_CLIPBOARD$', '_CLIPBOARDIMAGE', '_COMMANDCOUNT', '_CONNECTED', '_CONNECTIONADDRESS$',
            '_CONNECTIONADDRESS', '_CONSOLE', '_CONSOLETITLE', '_CONTINUE', '_CONTROLCHR',
            '_COPYIMAGE', '_COPYPALETTE', '_COSH', '_COT', '_COTH', '_CSC', '_CSCH', '_CV',
            '_CWD$', '_D2G', '_D2R', '_DEFAULTCOLOR', '_DEFINE', '_DELAY', '_DEPTHBUFFER',
            '_DESKTOPHEIGHT', '_DESKTOPWIDTH', '_DEST', '_DEVICE$', '_DEVICEINPUT', '_DEVICES',
            '_DIR$', '_DIREXISTS', '_DISPLAY', '_DISPLAYORDER', '_DONTBLEND', '_DONTWAIT',
            '_ERRORLINE', '_EXIT', '_EXPLICIT', '_FILEEXISTS', '_FLOAT', '_FONT', '_FONTHEIGHT',
            '_FONTWIDTH', '_FREEFONT', '_FREEIMAGE', '_FREETIMER', '_FULLSCREEN', '_G2D',
            '_G2R', '_GLRENDER', '_GREEN', '_GREEN32', '_HEIGHT', '_HIDE', '_HYPOT', '_ICON',
            '_INCLERRORFILE$', '_INCLERRORLINE', '_INTEGER64', '_KEYCLEAR', '_KEYDOWN',
            '_KEYHIT', '_LASTAXIS', '_LASTBUTTON', '_LASTWHEEL', '_LIMIT', '_LOADFONT',
            '_LOADIMAGE', '_MAPTRIANGLE', '_MAPUNICODE', '_MEM', '_MEMCOPY', '_MEMELEMENT',
            '_MEMEXISTS', '_MEMFILL', '_MEMFREE', '_MEMGET', '_MEMIMAGE', '_MEMNEW', '_MEMPUT',
            '_MIDDLE', '_MK$', '_MOUSEBUTTON', '_MOUSEHIDE', '_MOUSEINPUT', '_MOUSEMOVE',
            '_MOUSEMOVEMENTX', '_MOUSEMOVEMENTY', '_MOUSEPIPEOPEN', '_MOUSESHOW', '_MOUSEWHEEL',
            '_MOUSEX', '_MOUSEY', '_NEWIMAGE', '_OFFSET', '_OPENCLIENT', '_OPENCONNECTION',
            '_OPENHOST', '_OS$', '_PALETTECOLOR', '_PI', '_PIXELSIZE', '_PRESERVE', '_PRINTIMAGE',
            '_PRINTMODE', '_PRINTSTRING', '_PRINTWIDTH', '_PUTIMAGE', '_R2D', '_R2G', '_RED',
            '_RED32', '_RESIZE', '_RESIZEHEIGHT', '_RESIZEWIDTH', '_RGB', '_RGB32', '_RGBA',
            '_RGBA32', '_ROUND', '_SCREENCLICK', '_SCREENEXISTS', '_SCREENHIDE', '_SCREENICON',
            '_SCREENIMAGE', '_SCREENMOVE', '_SCREENPRINT', '_SCREENSHOW', '_SCREENX', '_SCREENY',
            '_SEC', '_SECH', '_SETALPHA', '_SHELLHIDE', '_SINH', '_SNDBAL', '_SNDCLOSE',
            '_SNDCOPY', '_SNDGETPOS', '_SNDLEN', '_SNDLIMIT', '_SNDLOOP', '_SNDOPEN', '_SNDOPENRAW',
            '_SNDPAUSE', '_SNDPAUSED', '_SNDPLAY', '_SNDPLAYCOPY', '_SNDPLAYFILE', '_SNDPLAYING',
            '_SNDRATE', '_SNDRAW', '_SNDRAWDONE', '_SNDRAWLEN', '_SNDSETPOS', '_SNDSTOP',
            '_SNDVOL', '_SOURCE', '_STARTDIR$', '_STRCMP', '_STRICMP', '_TANH', '_TITLE',
            '_TITLE$', '_UNSIGNED', '_WHEEL', '_WIDTH', '_WINDOWHANDLE', '_WINDOWHASFOCUS',
            '_GLACCUM', '_GLALPHAFUNC', '_GLARETEXTURESRESIDENT', '_GLARRAYELEMENT', '_GLBEGIN',
            '_GLBINDTEXTURE', '_GLBITMAP', '_GLBLENDFUNC', '_GLCALLLIST', '_GLCALLLISTS',
            '_GLCLEAR', '_GLCLEARACCUM', '_GLCLEARCOLOR', '_GLCLEARDEPTH', '_GLCLEARINDEX',
            '_GLCLEARSTENCIL', '_GLCLIPPLANE', '_GLCOLOR3B', '_GLCOLOR3BV', '_GLCOLOR3D',
            '_GLCOLOR3DV', '_GLCOLOR3F', '_GLCOLOR3FV', '_GLCOLOR3I', '_GLCOLOR3IV', '_GLCOLOR3S',
            '_GLCOLOR3SV', '_GLCOLOR3UB', '_GLCOLOR3UBV', '_GLCOLOR3UI', '_GLCOLOR3UIV',
            '_GLCOLOR3US', '_GLCOLOR3USV', '_GLCOLOR4B', '_GLCOLOR4BV', '_GLCOLOR4D', '_GLCOLOR4DV',
            '_GLCOLOR4F', '_GLCOLOR4FV', '_GLCOLOR4I', '_GLCOLOR4IV', '_GLCOLOR4S', '_GLCOLOR4SV',
            '_GLCOLOR4UB', '_GLCOLOR4UBV', '_GLCOLOR4UI', '_GLCOLOR4UIV', '_GLCOLOR4US',
            '_GLCOLOR4USV', '_GLCOLORMASK', '_GLCOLORMATERIAL', '_GLCOLORPOINTER', '_GLCOPYPIXELS',
            '_GLCOPYTEXIMAGE1D', '_GLCOPYTEXIMAGE2D', '_GLCOPYTEXSUBIMAGE1D', '_GLCOPYTEXSUBIMAGE2D',
            '_GLCULLFACE', '_GLDELETELISTS', '_GLDELETETEXTURES', '_GLDEPTHFUNC', '_GLDEPTHMASK',
            '_GLDEPTHRANGE', '_GLDISABLE', '_GLDISABLECLIENTSTATE', '_GLDRAWARRAYS', '_GLDRAWBUFFER',
            '_GLDRAWELEMENTS', '_GLDRAWPIXELS', '_GLEDGEFLAG', '_GLEDGEFLAGPOINTER', '_GLEDGEFLAGV',
            '_GLENABLE', '_GLENABLECLIENTSTATE', '_GLEND', '_GLENDLIST', '_GLEVALCOORD1D',
            '_GLEVALCOORD1DV', '_GLEVALCOORD1F', '_GLEVALCOORD1FV', '_GLEVALCOORD2D', '_GLEVALCOORD2DV',
            '_GLEVALCOORD2F', '_GLEVALCOORD2FV', '_GLEVALMESH1', '_GLEVALMESH2', '_GLEVALPOINT1',
            '_GLEVALPOINT2', '_GLFEEDBACKBUFFER', '_GLFINISH', '_GLFLUSH', '_GLFOGF', '_GLFOGFV',
            '_GLFOGI', '_GLFOGIV', '_GLFRONTFACE', '_GLFRUSTUM', '_GLGENLISTS', '_GLGENTEXTURES',
            '_GLGETBOOLEANV', '_GLGETCLIPPLANE', '_GLGETDOUBLEV', '_GLGETERROR', '_GLGETFLOATV',
            '_GLGETINTEGERV', '_GLGETLIGHTFV', '_GLGETLIGHTIV', '_GLGETMAPDV', '_GLGETMAPFV',
            '_GLGETMAPIV', '_GLGETMATERIALFV', '_GLGETMATERIALIV', '_GLGETPIXELMAPFV', '_GLGETPIXELMAPUIV',
            '_GLGETPIXELMAPUSV', '_GLGETPOINTERV', '_GLGETPOLYGONSTIPPLE', '_GLGETSTRING',
            '_GLGETTEXENVFV', '_GLGETTEXENVIV', '_GLGETTEXGENDV', '_GLGETTEXGENFV', '_GLGETTEXGENIV',
            '_GLGETTEXIMAGE', '_GLGETTEXLEVELPARAMETERFV', '_GLGETTEXLEVELPARAMETERIV',
            '_GLGETTEXPARAMETERFV', '_GLGETTEXPARAMETERIV', '_GLHINT', '_GLINDEXMASK', '_GLINDEXPOINTER',
            '_GLINDEXD', '_GLINDEXDV', '_GLINDEXF', '_GLINDEXFV', '_GLINDEXI', '_GLINDEXIV',
            '_GLINDEXS', '_GLINDEXSV', '_GLINDEXUB', '_GLINDEXUBV', '_GLINITNAMES', '_GLINTERLEAVEDARRAYS',
            '_GLISENABLED', '_GLISLIST', '_GLISTEXTURE', '_GLLIGHTMODELF', '_GLLIGHTMODELFV',
            '_GLLIGHTMODELI', '_GLLIGHTMODELIV', '_GLLIGHTF', '_GLLIGHTFV', '_GLLIGHTI',
            '_GLLIGHTIV', '_GLLINESTIPPLE', '_GLLINEWIDTH', '_GLLISTBASE', '_GLLOADIDENTITY',
            '_GLLOADMATRIXD', '_GLLOADMATRIXF', '_GLLOADNAME', '_GLLOGICOP', '_GLMAP1D',
            '_GLMAP1F', '_GLMAP2D', '_GLMAP2F', '_GLMAPGRID1D', '_GLMAPGRID1F', '_GLMAPGRID2D',
            '_GLMAPGRID2F', '_GLMATERIALF', '_GLMATERIALFV', '_GLMATERIALI', '_GLMATERIALIV',
            '_GLMATRIXMODE', '_GLMULTMATRIXD', '_GLMULTMATRIXF', '_GLNEWLIST', '_GLNORMAL3B',
            '_GLNORMAL3BV', '_GLNORMAL3D', '_GLNORMAL3DV', '_GLNORMAL3F', '_GLNORMAL3FV',
            '_GLNORMAL3I', '_GLNORMAL3IV', '_GLNORMAL3S', '_GLNORMAL3SV', '_GLNORMALPOINTER',
            '_GLORTHO', '_GLPASSTHROUGH', '_GLPIXELMAPFV', '_GLPIXELMAPUIV', '_GLPIXELMAPUSV',
            '_GLPIXELSTOREF', '_GLPIXELSTOREI', '_GLPIXELTRANSFERF', '_GLPIXELTRANSFERI',
            '_GLPIXELZOOM', '_GLPOINTSIZE', '_GLPOLYGONMODE', '_GLPOLYGONOFFSET', '_GLPOLYGONSTIPPLE',
            '_GLPOPATTRIB', '_GLPOPCLIENTATTRIB', '_GLPOPMATRIX', '_GLPOPNAME', '_GLPRIORITIZETEXTURES',
            '_GLPUSHATTRIB', '_GLPUSHCLIENTATTRIB', '_GLPUSHMATRIX', '_GLPUSHNAME', '_GLRASTERPOS2D',
            '_GLRASTERPOS2DV', '_GLRASTERPOS2F', '_GLRASTERPOS2FV', '_GLRASTERPOS2I', '_GLRASTERPOS2IV',
            '_GLRASTERPOS2S', '_GLRASTERPOS2SV', '_GLRASTERPOS3D', '_GLRASTERPOS3DV', '_GLRASTERPOS3F',
            '_GLRASTERPOS3FV', '_GLRASTERPOS3I', '_GLRASTERPOS3IV', '_GLRASTERPOS3S', '_GLRASTERPOS3SV',
            '_GLRASTERPOS4D', '_GLRASTERPOS4DV', '_GLRASTERPOS4F', '_GLRASTERPOS4FV', '_GLRASTERPOS4I',
            '_GLRASTERPOS4IV', '_GLRASTERPOS4S', '_GLRASTERPOS4SV', '_GLREADBUFFER', '_GLREADPIXELS',
            '_GLRECTD', '_GLRECTDV', '_GLRECTF', '_GLRECTFV', '_GLRECTI', '_GLRECTIV', '_GLRECTS',
            '_GLRECTSV', '_GLRENDERMODE', '_GLROTATED', '_GLROTATEF', '_GLSCALED', '_GLSCALEF',
            '_GLSCISSOR', '_GLSELECTBUFFER', '_GLSHADEMODEL', '_GLSTENCILFUNC', '_GLSTENCILMASK',
            '_GLSTENCILOP', '_GLTEXCOORD1D', '_GLTEXCOORD1DV', '_GLTEXCOORD1F', '_GLTEXCOORD1FV',
            '_GLTEXCOORD1I', '_GLTEXCOORD1IV', '_GLTEXCOORD1S', '_GLTEXCOORD1SV', '_GLTEXCOORD2D',
            '_GLTEXCOORD2DV', '_GLTEXCOORD2F', '_GLTEXCOORD2FV', '_GLTEXCOORD2I', '_GLTEXCOORD2IV',
            '_GLTEXCOORD2S', '_GLTEXCOORD2SV', '_GLTEXCOORD3D', '_GLTEXCOORD3DV', '_GLTEXCOORD3F',
            '_GLTEXCOORD3FV', '_GLTEXCOORD3I', '_GLTEXCOORD3IV', '_GLTEXCOORD3S', '_GLTEXCOORD3SV',
            '_GLTEXCOORD4D', '_GLTEXCOORD4DV', '_GLTEXCOORD4F', '_GLTEXCOORD4FV', '_GLTEXCOORD4I',
            '_GLTEXCOORD4IV', '_GLTEXCOORD4S', '_GLTEXCOORD4SV', '_GLTEXCOORDPOINTER', '_GLTEXENVF',
            '_GLTEXENVFV', '_GLTEXENVI', '_GLTEXENVIV', '_GLTEXGEND', '_GLTEXGENDV', '_GLTEXGENF',
            '_GLTEXGENFV', '_GLTEXGENI', '_GLTEXGENIV', '_GLTEXIMAGE1D', '_GLTEXIMAGE2D',
            '_GLTEXPARAMETERF', '_GLTEXPARAMETERFV', '_GLTEXPARAMETERI', '_GLTEXPARAMETERIV',
            '_GLTEXSUBIMAGE1D', '_GLTEXSUBIMAGE2D', '_GLTRANSLATED', '_GLTRANSLATEF', '_GLVERTEX2D',
            '_GLVERTEX2DV', '_GLVERTEX2F', '_GLVERTEX2FV', '_GLVERTEX2I', '_GLVERTEX2IV',
            '_GLVERTEX2S', '_GLVERTEX2SV', '_GLVERTEX3D', '_GLVERTEX3DV', '_GLVERTEX3F',
            '_GLVERTEX3FV', '_GLVERTEX3I', '_GLVERTEX3IV', '_GLVERTEX3S', '_GLVERTEX3SV',
            '_GLVERTEX4D', '_GLVERTEX4DV', '_GLVERTEX4F', '_GLVERTEX4FV', '_GLVERTEX4I',
            '_GLVERTEX4IV', '_GLVERTEX4S', '_GLVERTEX4SV', '_GLVERTEXPOINTER', '_GLVIEWPORT',
            'SMOOTH', 'STRETCH', '_ANTICLOCKWISE', '_BEHIND', '_CLEAR', '_FILLBACKGROUND',
            '_GLUPERSPECTIVE', '_HARDWARE', '_HARDWARE1', '_KEEPBACKGROUND', '_NONE', '_OFF',
            '_ONLY', '_ONLYBACKGROUND', '_ONTOP', '_SEAMLESS', '_SMOOTH', '_SMOOTHSHRUNK',
            '_SMOOTHSTRETCHED', '_SOFTWARE', '_SQUAREPIXELS', '_STRETCH', '_ALLOWFULLSCREEN',
            '_ALL', '_ECHO', '_INSTRREV', '_TRIM$', '_ACCEPTFILEDROP', '_FINISHDROP', '_TOTALDROPPEDFILES',
            '_DROPPEDFILE', '_DROPPEDFILE$', '_SHR', '_SHL', '_DEFLATE$', '_INFLATE$', '_READBIT', '_RESETBIT',
            '_SETBIT', '_TOGGLEBIT', '_ASSERT', '_CAPSLOCK', '_NUMLOCK', '_SCROLLLOCK', '_TOGGLE',
            '_CONSOLEFONT', '_CONSOLECURSOR', '_CONSOLEINPUT', '_CINP',
            ),
        2 => array(
            '$CHECKING', '$CONSOLE', '$DYNAMIC', '$ELSE', '$ELSEIF', '$END', '$STATIC', '$VERSIONINFO',
            '$VIRTUALKEYBOARD', '$ENDIF', '$EXEICON', '$IF', '$INCLUDE', '$LET', '$RESIZE', '$SCREENHIDE',
            '$SCREENSHOW', '$ASSERTS', '$NOPREFIX', '$COLOR',
            )
        ),
    'SYMBOLS' => array(
        '?', '(', ')', ',', '+', '-', '*', '/', '=', '<', '>', '^'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000066;',
            2 => 'color: #008000;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080;',
            2 => 'color: #808080;',
            3 => 'color: #8080C0;'
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099;'
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            1 => 'color: #cc66cc;',
            2 => 'color: #339933;'
            )
        ),
    'URLS' => array(
        1 => 'https://www.qb64.org/wiki/index.php/{FNAMEU}',
        2 => 'https://www.qb64.org/wiki/index.php/{FNAMEU}'
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        1 => '&amp;(?:H[0-9a-fA-F]+|O[0-7]+)(?!\w)',
        2 => '#[0-9]+(?!\w)'
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4
);
