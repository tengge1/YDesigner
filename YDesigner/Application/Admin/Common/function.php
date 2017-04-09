<?php
/**
 * �Ա������� JSON ����
 * @param mixed value ������� value ������resource ����֮�⣬����Ϊ�κ��������ͣ��ú���ֻ�ܽ��� UTF-8 ���������
 * @return string ���� value ֵ�� JSON ��ʽ
 */
function json_encode_ex($value)
{
    if (version_compare(PHP_VERSION,'5.4.0','<'))
    {
        $str = json_encode($value);
        $str = preg_replace_callback(
            "#\\\u([0-9a-f]{4})#i",
            function($matchs)
            {
                    return iconv('UCS-2BE', 'UTF-8', pack('H4', $matchs[1]));
            },
            $str);
        return $str;
    }
    else
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
}
