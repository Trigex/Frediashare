<playlist version="1">
    <title>{$info[0].vtitle}</title>
    <info>{$flvdo_url}/user{$info[0].uid}/{$info[0].vflvname}</info>
	<trackList>
	    <track>
		<title>{$info[0].vtitle}</title>
		<creator>{insert name=uid_to_name assign=uname vid=$info[0].vid}{$uname}</creator>
		<location>{$flvdo_url}/user{$info[0].uid}/{$info[0].vflvname}</location>
		{if $bgimage ne ""}
		<image>{$url_fp}/wms_audio/{$bgimage}</image>
		{/if}
	    </track>
	</trackList>
</playlist>