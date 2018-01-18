{math equation="$viddur/60" format="%0.0f" assign=minutes}
{math equation="$viddur - ($minutes * 60)" format="%0.0f" assign=seconds}
{if $seconds < 0}
    {math equation="$minutes - 1" assign=minutes}
    {math equation="$seconds + 60" assign=seconds}
{/if}