<?php /* Smarty version 2.6.26, created on 2009-11-10 15:17:50
         compiled from pagingcheck.tpl */ ?>
<?php if ($this->_tpl_vars['sbtn'] == 'mpl' || $this->_tpl_vars['sbtn'] == 'fav' || $this->_tpl_vars['sbtn'] == 'ufavs'): ?>
    <?php if ($_REQUEST['pagei']%10 == 0): ?>
	<?php $this->assign('opi', $_REQUEST['pagei']-1); ?>
	<?php unset($this->_sections['fooi']);
$this->_sections['fooi']['name'] = 'fooi';
$this->_sections['fooi']['start'] = (int)$_REQUEST['pagei']-$this->_tpl_vars['opi'];
$this->_sections['fooi']['loop'] = is_array($_loop=$_REQUEST['pagei']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['fooi']['show'] = true;
$this->_sections['fooi']['max'] = $this->_sections['fooi']['loop'];
$this->_sections['fooi']['step'] = 1;
if ($this->_sections['fooi']['start'] < 0)
    $this->_sections['fooi']['start'] = max($this->_sections['fooi']['step'] > 0 ? 0 : -1, $this->_sections['fooi']['loop'] + $this->_sections['fooi']['start']);
else
    $this->_sections['fooi']['start'] = min($this->_sections['fooi']['start'], $this->_sections['fooi']['step'] > 0 ? $this->_sections['fooi']['loop'] : $this->_sections['fooi']['loop']-1);
if ($this->_sections['fooi']['show']) {
    $this->_sections['fooi']['total'] = min(ceil(($this->_sections['fooi']['step'] > 0 ? $this->_sections['fooi']['loop'] - $this->_sections['fooi']['start'] : $this->_sections['fooi']['start']+1)/abs($this->_sections['fooi']['step'])), $this->_sections['fooi']['max']);
    if ($this->_sections['fooi']['total'] == 0)
        $this->_sections['fooi']['show'] = false;
} else
    $this->_sections['fooi']['total'] = 0;
if ($this->_sections['fooi']['show']):

            for ($this->_sections['fooi']['index'] = $this->_sections['fooi']['start'], $this->_sections['fooi']['iteration'] = 1;
                 $this->_sections['fooi']['iteration'] <= $this->_sections['fooi']['total'];
                 $this->_sections['fooi']['index'] += $this->_sections['fooi']['step'], $this->_sections['fooi']['iteration']++):
$this->_sections['fooi']['rownum'] = $this->_sections['fooi']['iteration'];
$this->_sections['fooi']['index_prev'] = $this->_sections['fooi']['index'] - $this->_sections['fooi']['step'];
$this->_sections['fooi']['index_next'] = $this->_sections['fooi']['index'] + $this->_sections['fooi']['step'];
$this->_sections['fooi']['first']      = ($this->_sections['fooi']['iteration'] == 1);
$this->_sections['fooi']['last']       = ($this->_sections['fooi']['iteration'] == $this->_sections['fooi']['total']);
?>
	    #pgi<?php echo $this->_sections['fooi']['index']; ?>
 { display: none; }
	<?php endfor; endif; ?>
	<?php unset($this->_sections['foo2i']);
$this->_sections['foo2i']['name'] = 'foo2i';
$this->_sections['foo2i']['start'] = (int)$_REQUEST['pagei']+11;
$this->_sections['foo2i']['loop'] = is_array($_loop=$this->_tpl_vars['tpagei']+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo2i']['show'] = true;
$this->_sections['foo2i']['max'] = $this->_sections['foo2i']['loop'];
$this->_sections['foo2i']['step'] = 1;
if ($this->_sections['foo2i']['start'] < 0)
    $this->_sections['foo2i']['start'] = max($this->_sections['foo2i']['step'] > 0 ? 0 : -1, $this->_sections['foo2i']['loop'] + $this->_sections['foo2i']['start']);
else
    $this->_sections['foo2i']['start'] = min($this->_sections['foo2i']['start'], $this->_sections['foo2i']['step'] > 0 ? $this->_sections['foo2i']['loop'] : $this->_sections['foo2i']['loop']-1);
if ($this->_sections['foo2i']['show']) {
    $this->_sections['foo2i']['total'] = min(ceil(($this->_sections['foo2i']['step'] > 0 ? $this->_sections['foo2i']['loop'] - $this->_sections['foo2i']['start'] : $this->_sections['foo2i']['start']+1)/abs($this->_sections['foo2i']['step'])), $this->_sections['foo2i']['max']);
    if ($this->_sections['foo2i']['total'] == 0)
        $this->_sections['foo2i']['show'] = false;
} else
    $this->_sections['foo2i']['total'] = 0;
if ($this->_sections['foo2i']['show']):

            for ($this->_sections['foo2i']['index'] = $this->_sections['foo2i']['start'], $this->_sections['foo2i']['iteration'] = 1;
                 $this->_sections['foo2i']['iteration'] <= $this->_sections['foo2i']['total'];
                 $this->_sections['foo2i']['index'] += $this->_sections['foo2i']['step'], $this->_sections['foo2i']['iteration']++):
$this->_sections['foo2i']['rownum'] = $this->_sections['foo2i']['iteration'];
$this->_sections['foo2i']['index_prev'] = $this->_sections['foo2i']['index'] - $this->_sections['foo2i']['step'];
$this->_sections['foo2i']['index_next'] = $this->_sections['foo2i']['index'] + $this->_sections['foo2i']['step'];
$this->_sections['foo2i']['first']      = ($this->_sections['foo2i']['iteration'] == 1);
$this->_sections['foo2i']['last']       = ($this->_sections['foo2i']['iteration'] == $this->_sections['foo2i']['total']);
?>
	    #pgi<?php echo $this->_sections['foo2i']['index']; ?>
 { display: none; }
	<?php endfor; endif; ?>
    <?php else: ?>
	<?php $this->assign('cati', $_REQUEST['pagei']/10); ?>
	<?php $this->assign('cat2i', $this->_tpl_vars['cati']*10); ?>
	<?php $this->assign('resti', $this->_tpl_vars['cat2i']%10); ?>
	<?php unset($this->_sections['foo3i']);
$this->_sections['foo3i']['name'] = 'foo3i';
$this->_sections['foo3i']['start'] = (int)1;
$this->_sections['foo3i']['loop'] = is_array($_loop=$this->_tpl_vars['cat2i']-$this->_tpl_vars['resti']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo3i']['show'] = true;
$this->_sections['foo3i']['max'] = $this->_sections['foo3i']['loop'];
$this->_sections['foo3i']['step'] = 1;
if ($this->_sections['foo3i']['start'] < 0)
    $this->_sections['foo3i']['start'] = max($this->_sections['foo3i']['step'] > 0 ? 0 : -1, $this->_sections['foo3i']['loop'] + $this->_sections['foo3i']['start']);
else
    $this->_sections['foo3i']['start'] = min($this->_sections['foo3i']['start'], $this->_sections['foo3i']['step'] > 0 ? $this->_sections['foo3i']['loop'] : $this->_sections['foo3i']['loop']-1);
if ($this->_sections['foo3i']['show']) {
    $this->_sections['foo3i']['total'] = min(ceil(($this->_sections['foo3i']['step'] > 0 ? $this->_sections['foo3i']['loop'] - $this->_sections['foo3i']['start'] : $this->_sections['foo3i']['start']+1)/abs($this->_sections['foo3i']['step'])), $this->_sections['foo3i']['max']);
    if ($this->_sections['foo3i']['total'] == 0)
        $this->_sections['foo3i']['show'] = false;
} else
    $this->_sections['foo3i']['total'] = 0;
if ($this->_sections['foo3i']['show']):

            for ($this->_sections['foo3i']['index'] = $this->_sections['foo3i']['start'], $this->_sections['foo3i']['iteration'] = 1;
                 $this->_sections['foo3i']['iteration'] <= $this->_sections['foo3i']['total'];
                 $this->_sections['foo3i']['index'] += $this->_sections['foo3i']['step'], $this->_sections['foo3i']['iteration']++):
$this->_sections['foo3i']['rownum'] = $this->_sections['foo3i']['iteration'];
$this->_sections['foo3i']['index_prev'] = $this->_sections['foo3i']['index'] - $this->_sections['foo3i']['step'];
$this->_sections['foo3i']['index_next'] = $this->_sections['foo3i']['index'] + $this->_sections['foo3i']['step'];
$this->_sections['foo3i']['first']      = ($this->_sections['foo3i']['iteration'] == 1);
$this->_sections['foo3i']['last']       = ($this->_sections['foo3i']['iteration'] == $this->_sections['foo3i']['total']);
?>
	    #pgi<?php echo $this->_sections['foo3i']['index']; ?>
 { display: none; }
	<?php endfor; endif; ?>
	<?php $this->assign('difi', $this->_tpl_vars['cat2i']-$this->_tpl_vars['resti']); ?>
	<?php $this->assign('dif2i', $this->_tpl_vars['difi']+11); ?>
	<?php unset($this->_sections['foo4i']);
$this->_sections['foo4i']['name'] = 'foo4i';
$this->_sections['foo4i']['start'] = (int)$this->_tpl_vars['dif2i'];
$this->_sections['foo4i']['loop'] = is_array($_loop=$this->_tpl_vars['tpagei']+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo4i']['show'] = true;
$this->_sections['foo4i']['max'] = $this->_sections['foo4i']['loop'];
$this->_sections['foo4i']['step'] = 1;
if ($this->_sections['foo4i']['start'] < 0)
    $this->_sections['foo4i']['start'] = max($this->_sections['foo4i']['step'] > 0 ? 0 : -1, $this->_sections['foo4i']['loop'] + $this->_sections['foo4i']['start']);
else
    $this->_sections['foo4i']['start'] = min($this->_sections['foo4i']['start'], $this->_sections['foo4i']['step'] > 0 ? $this->_sections['foo4i']['loop'] : $this->_sections['foo4i']['loop']-1);
if ($this->_sections['foo4i']['show']) {
    $this->_sections['foo4i']['total'] = min(ceil(($this->_sections['foo4i']['step'] > 0 ? $this->_sections['foo4i']['loop'] - $this->_sections['foo4i']['start'] : $this->_sections['foo4i']['start']+1)/abs($this->_sections['foo4i']['step'])), $this->_sections['foo4i']['max']);
    if ($this->_sections['foo4i']['total'] == 0)
        $this->_sections['foo4i']['show'] = false;
} else
    $this->_sections['foo4i']['total'] = 0;
if ($this->_sections['foo4i']['show']):

            for ($this->_sections['foo4i']['index'] = $this->_sections['foo4i']['start'], $this->_sections['foo4i']['iteration'] = 1;
                 $this->_sections['foo4i']['iteration'] <= $this->_sections['foo4i']['total'];
                 $this->_sections['foo4i']['index'] += $this->_sections['foo4i']['step'], $this->_sections['foo4i']['iteration']++):
$this->_sections['foo4i']['rownum'] = $this->_sections['foo4i']['iteration'];
$this->_sections['foo4i']['index_prev'] = $this->_sections['foo4i']['index'] - $this->_sections['foo4i']['step'];
$this->_sections['foo4i']['index_next'] = $this->_sections['foo4i']['index'] + $this->_sections['foo4i']['step'];
$this->_sections['foo4i']['first']      = ($this->_sections['foo4i']['iteration'] == 1);
$this->_sections['foo4i']['last']       = ($this->_sections['foo4i']['iteration'] == $this->_sections['foo4i']['total']);
?>
	    #pgi<?php echo $this->_sections['foo4i']['index']; ?>
 { display: none; }
	<?php endfor; endif; ?>
    <?php endif; ?>
    <?php if ($_REQUEST['pagea']%10 == 0): ?>
	<?php $this->assign('opa', $_REQUEST['pagea']-1); ?>
	<?php unset($this->_sections['fooa']);
$this->_sections['fooa']['name'] = 'fooa';
$this->_sections['fooa']['start'] = (int)$_REQUEST['pagea']-$this->_tpl_vars['opa'];
$this->_sections['fooa']['loop'] = is_array($_loop=$_REQUEST['pagea']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['fooa']['show'] = true;
$this->_sections['fooa']['max'] = $this->_sections['fooa']['loop'];
$this->_sections['fooa']['step'] = 1;
if ($this->_sections['fooa']['start'] < 0)
    $this->_sections['fooa']['start'] = max($this->_sections['fooa']['step'] > 0 ? 0 : -1, $this->_sections['fooa']['loop'] + $this->_sections['fooa']['start']);
else
    $this->_sections['fooa']['start'] = min($this->_sections['fooa']['start'], $this->_sections['fooa']['step'] > 0 ? $this->_sections['fooa']['loop'] : $this->_sections['fooa']['loop']-1);
if ($this->_sections['fooa']['show']) {
    $this->_sections['fooa']['total'] = min(ceil(($this->_sections['fooa']['step'] > 0 ? $this->_sections['fooa']['loop'] - $this->_sections['fooa']['start'] : $this->_sections['fooa']['start']+1)/abs($this->_sections['fooa']['step'])), $this->_sections['fooa']['max']);
    if ($this->_sections['fooa']['total'] == 0)
        $this->_sections['fooa']['show'] = false;
} else
    $this->_sections['fooa']['total'] = 0;
if ($this->_sections['fooa']['show']):

            for ($this->_sections['fooa']['index'] = $this->_sections['fooa']['start'], $this->_sections['fooa']['iteration'] = 1;
                 $this->_sections['fooa']['iteration'] <= $this->_sections['fooa']['total'];
                 $this->_sections['fooa']['index'] += $this->_sections['fooa']['step'], $this->_sections['fooa']['iteration']++):
$this->_sections['fooa']['rownum'] = $this->_sections['fooa']['iteration'];
$this->_sections['fooa']['index_prev'] = $this->_sections['fooa']['index'] - $this->_sections['fooa']['step'];
$this->_sections['fooa']['index_next'] = $this->_sections['fooa']['index'] + $this->_sections['fooa']['step'];
$this->_sections['fooa']['first']      = ($this->_sections['fooa']['iteration'] == 1);
$this->_sections['fooa']['last']       = ($this->_sections['fooa']['iteration'] == $this->_sections['fooa']['total']);
?>
	    #pga<?php echo $this->_sections['fooa']['index']; ?>
 { display: none; }
	<?php endfor; endif; ?>
	<?php unset($this->_sections['foo2a']);
$this->_sections['foo2a']['name'] = 'foo2a';
$this->_sections['foo2a']['start'] = (int)$_REQUEST['pagea']+11;
$this->_sections['foo2a']['loop'] = is_array($_loop=$this->_tpl_vars['tpagea']+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo2a']['show'] = true;
$this->_sections['foo2a']['max'] = $this->_sections['foo2a']['loop'];
$this->_sections['foo2a']['step'] = 1;
if ($this->_sections['foo2a']['start'] < 0)
    $this->_sections['foo2a']['start'] = max($this->_sections['foo2a']['step'] > 0 ? 0 : -1, $this->_sections['foo2a']['loop'] + $this->_sections['foo2a']['start']);
else
    $this->_sections['foo2a']['start'] = min($this->_sections['foo2a']['start'], $this->_sections['foo2a']['step'] > 0 ? $this->_sections['foo2a']['loop'] : $this->_sections['foo2a']['loop']-1);
if ($this->_sections['foo2a']['show']) {
    $this->_sections['foo2a']['total'] = min(ceil(($this->_sections['foo2a']['step'] > 0 ? $this->_sections['foo2a']['loop'] - $this->_sections['foo2a']['start'] : $this->_sections['foo2a']['start']+1)/abs($this->_sections['foo2a']['step'])), $this->_sections['foo2a']['max']);
    if ($this->_sections['foo2a']['total'] == 0)
        $this->_sections['foo2a']['show'] = false;
} else
    $this->_sections['foo2a']['total'] = 0;
if ($this->_sections['foo2a']['show']):

            for ($this->_sections['foo2a']['index'] = $this->_sections['foo2a']['start'], $this->_sections['foo2a']['iteration'] = 1;
                 $this->_sections['foo2a']['iteration'] <= $this->_sections['foo2a']['total'];
                 $this->_sections['foo2a']['index'] += $this->_sections['foo2a']['step'], $this->_sections['foo2a']['iteration']++):
$this->_sections['foo2a']['rownum'] = $this->_sections['foo2a']['iteration'];
$this->_sections['foo2a']['index_prev'] = $this->_sections['foo2a']['index'] - $this->_sections['foo2a']['step'];
$this->_sections['foo2a']['index_next'] = $this->_sections['foo2a']['index'] + $this->_sections['foo2a']['step'];
$this->_sections['foo2a']['first']      = ($this->_sections['foo2a']['iteration'] == 1);
$this->_sections['foo2a']['last']       = ($this->_sections['foo2a']['iteration'] == $this->_sections['foo2a']['total']);
?>
	    #pga<?php echo $this->_sections['foo2a']['index']; ?>
 { display: none; }
	<?php endfor; endif; ?>
    <?php else: ?>
	<?php $this->assign('cata', $_REQUEST['pagea']/10); ?>
	<?php $this->assign('cat2a', $this->_tpl_vars['cata']*10); ?>
	<?php $this->assign('resta', $this->_tpl_vars['cat2a']%10); ?>
	<?php unset($this->_sections['foo3a']);
$this->_sections['foo3a']['name'] = 'foo3a';
$this->_sections['foo3a']['start'] = (int)1;
$this->_sections['foo3a']['loop'] = is_array($_loop=$this->_tpl_vars['cat2a']-$this->_tpl_vars['resta']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo3a']['show'] = true;
$this->_sections['foo3a']['max'] = $this->_sections['foo3a']['loop'];
$this->_sections['foo3a']['step'] = 1;
if ($this->_sections['foo3a']['start'] < 0)
    $this->_sections['foo3a']['start'] = max($this->_sections['foo3a']['step'] > 0 ? 0 : -1, $this->_sections['foo3a']['loop'] + $this->_sections['foo3a']['start']);
else
    $this->_sections['foo3a']['start'] = min($this->_sections['foo3a']['start'], $this->_sections['foo3a']['step'] > 0 ? $this->_sections['foo3a']['loop'] : $this->_sections['foo3a']['loop']-1);
if ($this->_sections['foo3a']['show']) {
    $this->_sections['foo3a']['total'] = min(ceil(($this->_sections['foo3a']['step'] > 0 ? $this->_sections['foo3a']['loop'] - $this->_sections['foo3a']['start'] : $this->_sections['foo3a']['start']+1)/abs($this->_sections['foo3a']['step'])), $this->_sections['foo3a']['max']);
    if ($this->_sections['foo3a']['total'] == 0)
        $this->_sections['foo3a']['show'] = false;
} else
    $this->_sections['foo3a']['total'] = 0;
if ($this->_sections['foo3a']['show']):

            for ($this->_sections['foo3a']['index'] = $this->_sections['foo3a']['start'], $this->_sections['foo3a']['iteration'] = 1;
                 $this->_sections['foo3a']['iteration'] <= $this->_sections['foo3a']['total'];
                 $this->_sections['foo3a']['index'] += $this->_sections['foo3a']['step'], $this->_sections['foo3a']['iteration']++):
$this->_sections['foo3a']['rownum'] = $this->_sections['foo3a']['iteration'];
$this->_sections['foo3a']['index_prev'] = $this->_sections['foo3a']['index'] - $this->_sections['foo3a']['step'];
$this->_sections['foo3a']['index_next'] = $this->_sections['foo3a']['index'] + $this->_sections['foo3a']['step'];
$this->_sections['foo3a']['first']      = ($this->_sections['foo3a']['iteration'] == 1);
$this->_sections['foo3a']['last']       = ($this->_sections['foo3a']['iteration'] == $this->_sections['foo3a']['total']);
?>
	    #pga<?php echo $this->_sections['foo3a']['index']; ?>
 { display: none; }
	<?php endfor; endif; ?>
	<?php $this->assign('difa', $this->_tpl_vars['cat2a']-$this->_tpl_vars['resta']); ?>
	<?php $this->assign('dif2a', $this->_tpl_vars['difa']+11); ?>
	<?php unset($this->_sections['foo4a']);
$this->_sections['foo4a']['name'] = 'foo4a';
$this->_sections['foo4a']['start'] = (int)$this->_tpl_vars['dif2a'];
$this->_sections['foo4a']['loop'] = is_array($_loop=$this->_tpl_vars['tpagea']+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo4a']['show'] = true;
$this->_sections['foo4a']['max'] = $this->_sections['foo4a']['loop'];
$this->_sections['foo4a']['step'] = 1;
if ($this->_sections['foo4a']['start'] < 0)
    $this->_sections['foo4a']['start'] = max($this->_sections['foo4a']['step'] > 0 ? 0 : -1, $this->_sections['foo4a']['loop'] + $this->_sections['foo4a']['start']);
else
    $this->_sections['foo4a']['start'] = min($this->_sections['foo4a']['start'], $this->_sections['foo4a']['step'] > 0 ? $this->_sections['foo4a']['loop'] : $this->_sections['foo4a']['loop']-1);
if ($this->_sections['foo4a']['show']) {
    $this->_sections['foo4a']['total'] = min(ceil(($this->_sections['foo4a']['step'] > 0 ? $this->_sections['foo4a']['loop'] - $this->_sections['foo4a']['start'] : $this->_sections['foo4a']['start']+1)/abs($this->_sections['foo4a']['step'])), $this->_sections['foo4a']['max']);
    if ($this->_sections['foo4a']['total'] == 0)
        $this->_sections['foo4a']['show'] = false;
} else
    $this->_sections['foo4a']['total'] = 0;
if ($this->_sections['foo4a']['show']):

            for ($this->_sections['foo4a']['index'] = $this->_sections['foo4a']['start'], $this->_sections['foo4a']['iteration'] = 1;
                 $this->_sections['foo4a']['iteration'] <= $this->_sections['foo4a']['total'];
                 $this->_sections['foo4a']['index'] += $this->_sections['foo4a']['step'], $this->_sections['foo4a']['iteration']++):
$this->_sections['foo4a']['rownum'] = $this->_sections['foo4a']['iteration'];
$this->_sections['foo4a']['index_prev'] = $this->_sections['foo4a']['index'] - $this->_sections['foo4a']['step'];
$this->_sections['foo4a']['index_next'] = $this->_sections['foo4a']['index'] + $this->_sections['foo4a']['step'];
$this->_sections['foo4a']['first']      = ($this->_sections['foo4a']['iteration'] == 1);
$this->_sections['foo4a']['last']       = ($this->_sections['foo4a']['iteration'] == $this->_sections['foo4a']['total']);
?>
	#pga<?php echo $this->_sections['foo4a']['index']; ?>
 { display: none; }
	<?php endfor; endif; ?>
    <?php endif; ?>
    <?php if ($_REQUEST['page']%10 == 0): ?>
	<?php $this->assign('op', $_REQUEST['page']-1); ?>
	<?php unset($this->_sections['foo']);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['start'] = (int)$_REQUEST['page']-$this->_tpl_vars['op'];
$this->_sections['foo']['loop'] = is_array($_loop=$_REQUEST['page']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['show'] = true;
$this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
$this->_sections['foo']['step'] = 1;
if ($this->_sections['foo']['start'] < 0)
    $this->_sections['foo']['start'] = max($this->_sections['foo']['step'] > 0 ? 0 : -1, $this->_sections['foo']['loop'] + $this->_sections['foo']['start']);
else
    $this->_sections['foo']['start'] = min($this->_sections['foo']['start'], $this->_sections['foo']['step'] > 0 ? $this->_sections['foo']['loop'] : $this->_sections['foo']['loop']-1);
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = min(ceil(($this->_sections['foo']['step'] > 0 ? $this->_sections['foo']['loop'] - $this->_sections['foo']['start'] : $this->_sections['foo']['start']+1)/abs($this->_sections['foo']['step'])), $this->_sections['foo']['max']);
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
?>
	    #pg<?php echo $this->_sections['foo']['index']; ?>
 { display: none; }
	<?php endfor; endif; ?>
	<?php unset($this->_sections['foo2']);
$this->_sections['foo2']['name'] = 'foo2';
$this->_sections['foo2']['start'] = (int)$_REQUEST['page']+11;
$this->_sections['foo2']['loop'] = is_array($_loop=$this->_tpl_vars['tpage']+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo2']['show'] = true;
$this->_sections['foo2']['max'] = $this->_sections['foo2']['loop'];
$this->_sections['foo2']['step'] = 1;
if ($this->_sections['foo2']['start'] < 0)
    $this->_sections['foo2']['start'] = max($this->_sections['foo2']['step'] > 0 ? 0 : -1, $this->_sections['foo2']['loop'] + $this->_sections['foo2']['start']);
else
    $this->_sections['foo2']['start'] = min($this->_sections['foo2']['start'], $this->_sections['foo2']['step'] > 0 ? $this->_sections['foo2']['loop'] : $this->_sections['foo2']['loop']-1);
if ($this->_sections['foo2']['show']) {
    $this->_sections['foo2']['total'] = min(ceil(($this->_sections['foo2']['step'] > 0 ? $this->_sections['foo2']['loop'] - $this->_sections['foo2']['start'] : $this->_sections['foo2']['start']+1)/abs($this->_sections['foo2']['step'])), $this->_sections['foo2']['max']);
    if ($this->_sections['foo2']['total'] == 0)
        $this->_sections['foo2']['show'] = false;
} else
    $this->_sections['foo2']['total'] = 0;
if ($this->_sections['foo2']['show']):

            for ($this->_sections['foo2']['index'] = $this->_sections['foo2']['start'], $this->_sections['foo2']['iteration'] = 1;
                 $this->_sections['foo2']['iteration'] <= $this->_sections['foo2']['total'];
                 $this->_sections['foo2']['index'] += $this->_sections['foo2']['step'], $this->_sections['foo2']['iteration']++):
$this->_sections['foo2']['rownum'] = $this->_sections['foo2']['iteration'];
$this->_sections['foo2']['index_prev'] = $this->_sections['foo2']['index'] - $this->_sections['foo2']['step'];
$this->_sections['foo2']['index_next'] = $this->_sections['foo2']['index'] + $this->_sections['foo2']['step'];
$this->_sections['foo2']['first']      = ($this->_sections['foo2']['iteration'] == 1);
$this->_sections['foo2']['last']       = ($this->_sections['foo2']['iteration'] == $this->_sections['foo2']['total']);
?>
	    #pg<?php echo $this->_sections['foo2']['index']; ?>
 { display: none; }
	<?php endfor; endif; ?>
    <?php else: ?>
	<?php $this->assign('cat', $_REQUEST['page']/10); ?>
	<?php $this->assign('cat2', $this->_tpl_vars['cat']*10); ?>
	<?php $this->assign('rest', $this->_tpl_vars['cat2']%10); ?>
	<?php unset($this->_sections['foo3']);
$this->_sections['foo3']['name'] = 'foo3';
$this->_sections['foo3']['start'] = (int)1;
$this->_sections['foo3']['loop'] = is_array($_loop=$this->_tpl_vars['cat2']-$this->_tpl_vars['rest']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo3']['show'] = true;
$this->_sections['foo3']['max'] = $this->_sections['foo3']['loop'];
$this->_sections['foo3']['step'] = 1;
if ($this->_sections['foo3']['start'] < 0)
    $this->_sections['foo3']['start'] = max($this->_sections['foo3']['step'] > 0 ? 0 : -1, $this->_sections['foo3']['loop'] + $this->_sections['foo3']['start']);
else
    $this->_sections['foo3']['start'] = min($this->_sections['foo3']['start'], $this->_sections['foo3']['step'] > 0 ? $this->_sections['foo3']['loop'] : $this->_sections['foo3']['loop']-1);
if ($this->_sections['foo3']['show']) {
    $this->_sections['foo3']['total'] = min(ceil(($this->_sections['foo3']['step'] > 0 ? $this->_sections['foo3']['loop'] - $this->_sections['foo3']['start'] : $this->_sections['foo3']['start']+1)/abs($this->_sections['foo3']['step'])), $this->_sections['foo3']['max']);
    if ($this->_sections['foo3']['total'] == 0)
        $this->_sections['foo3']['show'] = false;
} else
    $this->_sections['foo3']['total'] = 0;
if ($this->_sections['foo3']['show']):

            for ($this->_sections['foo3']['index'] = $this->_sections['foo3']['start'], $this->_sections['foo3']['iteration'] = 1;
                 $this->_sections['foo3']['iteration'] <= $this->_sections['foo3']['total'];
                 $this->_sections['foo3']['index'] += $this->_sections['foo3']['step'], $this->_sections['foo3']['iteration']++):
$this->_sections['foo3']['rownum'] = $this->_sections['foo3']['iteration'];
$this->_sections['foo3']['index_prev'] = $this->_sections['foo3']['index'] - $this->_sections['foo3']['step'];
$this->_sections['foo3']['index_next'] = $this->_sections['foo3']['index'] + $this->_sections['foo3']['step'];
$this->_sections['foo3']['first']      = ($this->_sections['foo3']['iteration'] == 1);
$this->_sections['foo3']['last']       = ($this->_sections['foo3']['iteration'] == $this->_sections['foo3']['total']);
?>
	    #pg<?php echo $this->_sections['foo3']['index']; ?>
 { display: none; }
	<?php endfor; endif; ?>
	<?php $this->assign('dif', $this->_tpl_vars['cat2']-$this->_tpl_vars['rest']); ?>
	<?php $this->assign('dif2', $this->_tpl_vars['dif']+11); ?>
	<?php unset($this->_sections['foo4']);
$this->_sections['foo4']['name'] = 'foo4';
$this->_sections['foo4']['start'] = (int)$this->_tpl_vars['dif2'];
$this->_sections['foo4']['loop'] = is_array($_loop=$this->_tpl_vars['tpage']+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo4']['show'] = true;
$this->_sections['foo4']['max'] = $this->_sections['foo4']['loop'];
$this->_sections['foo4']['step'] = 1;
if ($this->_sections['foo4']['start'] < 0)
    $this->_sections['foo4']['start'] = max($this->_sections['foo4']['step'] > 0 ? 0 : -1, $this->_sections['foo4']['loop'] + $this->_sections['foo4']['start']);
else
    $this->_sections['foo4']['start'] = min($this->_sections['foo4']['start'], $this->_sections['foo4']['step'] > 0 ? $this->_sections['foo4']['loop'] : $this->_sections['foo4']['loop']-1);
if ($this->_sections['foo4']['show']) {
    $this->_sections['foo4']['total'] = min(ceil(($this->_sections['foo4']['step'] > 0 ? $this->_sections['foo4']['loop'] - $this->_sections['foo4']['start'] : $this->_sections['foo4']['start']+1)/abs($this->_sections['foo4']['step'])), $this->_sections['foo4']['max']);
    if ($this->_sections['foo4']['total'] == 0)
        $this->_sections['foo4']['show'] = false;
} else
    $this->_sections['foo4']['total'] = 0;
if ($this->_sections['foo4']['show']):

            for ($this->_sections['foo4']['index'] = $this->_sections['foo4']['start'], $this->_sections['foo4']['iteration'] = 1;
                 $this->_sections['foo4']['iteration'] <= $this->_sections['foo4']['total'];
                 $this->_sections['foo4']['index'] += $this->_sections['foo4']['step'], $this->_sections['foo4']['iteration']++):
$this->_sections['foo4']['rownum'] = $this->_sections['foo4']['iteration'];
$this->_sections['foo4']['index_prev'] = $this->_sections['foo4']['index'] - $this->_sections['foo4']['step'];
$this->_sections['foo4']['index_next'] = $this->_sections['foo4']['index'] + $this->_sections['foo4']['step'];
$this->_sections['foo4']['first']      = ($this->_sections['foo4']['iteration'] == 1);
$this->_sections['foo4']['last']       = ($this->_sections['foo4']['iteration'] == $this->_sections['foo4']['total']);
?>
	    #pg<?php echo $this->_sections['foo4']['index']; ?>
 { display: none; }
	<?php endfor; endif; ?>
    <?php endif; ?>
<?php else: ?>
    <?php if ($_REQUEST['page']%10 == 0): ?>
	<?php $this->assign('op', $_REQUEST['page']-1); ?>
	<?php unset($this->_sections['foo']);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['start'] = (int)$_REQUEST['page']-$this->_tpl_vars['op'];
$this->_sections['foo']['loop'] = is_array($_loop=$_REQUEST['page']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['show'] = true;
$this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
$this->_sections['foo']['step'] = 1;
if ($this->_sections['foo']['start'] < 0)
    $this->_sections['foo']['start'] = max($this->_sections['foo']['step'] > 0 ? 0 : -1, $this->_sections['foo']['loop'] + $this->_sections['foo']['start']);
else
    $this->_sections['foo']['start'] = min($this->_sections['foo']['start'], $this->_sections['foo']['step'] > 0 ? $this->_sections['foo']['loop'] : $this->_sections['foo']['loop']-1);
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = min(ceil(($this->_sections['foo']['step'] > 0 ? $this->_sections['foo']['loop'] - $this->_sections['foo']['start'] : $this->_sections['foo']['start']+1)/abs($this->_sections['foo']['step'])), $this->_sections['foo']['max']);
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
?>
	    #pg<?php echo $this->_sections['foo']['index']; ?>
 { display: none; }
	<?php endfor; endif; ?>
	<?php unset($this->_sections['foo2']);
$this->_sections['foo2']['name'] = 'foo2';
$this->_sections['foo2']['start'] = (int)$_REQUEST['page']+11;
$this->_sections['foo2']['loop'] = is_array($_loop=$this->_tpl_vars['tpage']+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo2']['show'] = true;
$this->_sections['foo2']['max'] = $this->_sections['foo2']['loop'];
$this->_sections['foo2']['step'] = 1;
if ($this->_sections['foo2']['start'] < 0)
    $this->_sections['foo2']['start'] = max($this->_sections['foo2']['step'] > 0 ? 0 : -1, $this->_sections['foo2']['loop'] + $this->_sections['foo2']['start']);
else
    $this->_sections['foo2']['start'] = min($this->_sections['foo2']['start'], $this->_sections['foo2']['step'] > 0 ? $this->_sections['foo2']['loop'] : $this->_sections['foo2']['loop']-1);
if ($this->_sections['foo2']['show']) {
    $this->_sections['foo2']['total'] = min(ceil(($this->_sections['foo2']['step'] > 0 ? $this->_sections['foo2']['loop'] - $this->_sections['foo2']['start'] : $this->_sections['foo2']['start']+1)/abs($this->_sections['foo2']['step'])), $this->_sections['foo2']['max']);
    if ($this->_sections['foo2']['total'] == 0)
        $this->_sections['foo2']['show'] = false;
} else
    $this->_sections['foo2']['total'] = 0;
if ($this->_sections['foo2']['show']):

            for ($this->_sections['foo2']['index'] = $this->_sections['foo2']['start'], $this->_sections['foo2']['iteration'] = 1;
                 $this->_sections['foo2']['iteration'] <= $this->_sections['foo2']['total'];
                 $this->_sections['foo2']['index'] += $this->_sections['foo2']['step'], $this->_sections['foo2']['iteration']++):
$this->_sections['foo2']['rownum'] = $this->_sections['foo2']['iteration'];
$this->_sections['foo2']['index_prev'] = $this->_sections['foo2']['index'] - $this->_sections['foo2']['step'];
$this->_sections['foo2']['index_next'] = $this->_sections['foo2']['index'] + $this->_sections['foo2']['step'];
$this->_sections['foo2']['first']      = ($this->_sections['foo2']['iteration'] == 1);
$this->_sections['foo2']['last']       = ($this->_sections['foo2']['iteration'] == $this->_sections['foo2']['total']);
?>
	    #pg<?php echo $this->_sections['foo2']['index']; ?>
 { display: none; }
	<?php endfor; endif; ?>
    <?php else: ?>
	<?php $this->assign('cat', $_REQUEST['page']/10); ?>
	<?php $this->assign('cat2', $this->_tpl_vars['cat']*10); ?>
	<?php $this->assign('rest', $this->_tpl_vars['cat2']%10); ?>
	<?php unset($this->_sections['foo3']);
$this->_sections['foo3']['name'] = 'foo3';
$this->_sections['foo3']['start'] = (int)1;
$this->_sections['foo3']['loop'] = is_array($_loop=$this->_tpl_vars['cat2']-$this->_tpl_vars['rest']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo3']['show'] = true;
$this->_sections['foo3']['max'] = $this->_sections['foo3']['loop'];
$this->_sections['foo3']['step'] = 1;
if ($this->_sections['foo3']['start'] < 0)
    $this->_sections['foo3']['start'] = max($this->_sections['foo3']['step'] > 0 ? 0 : -1, $this->_sections['foo3']['loop'] + $this->_sections['foo3']['start']);
else
    $this->_sections['foo3']['start'] = min($this->_sections['foo3']['start'], $this->_sections['foo3']['step'] > 0 ? $this->_sections['foo3']['loop'] : $this->_sections['foo3']['loop']-1);
if ($this->_sections['foo3']['show']) {
    $this->_sections['foo3']['total'] = min(ceil(($this->_sections['foo3']['step'] > 0 ? $this->_sections['foo3']['loop'] - $this->_sections['foo3']['start'] : $this->_sections['foo3']['start']+1)/abs($this->_sections['foo3']['step'])), $this->_sections['foo3']['max']);
    if ($this->_sections['foo3']['total'] == 0)
        $this->_sections['foo3']['show'] = false;
} else
    $this->_sections['foo3']['total'] = 0;
if ($this->_sections['foo3']['show']):

            for ($this->_sections['foo3']['index'] = $this->_sections['foo3']['start'], $this->_sections['foo3']['iteration'] = 1;
                 $this->_sections['foo3']['iteration'] <= $this->_sections['foo3']['total'];
                 $this->_sections['foo3']['index'] += $this->_sections['foo3']['step'], $this->_sections['foo3']['iteration']++):
$this->_sections['foo3']['rownum'] = $this->_sections['foo3']['iteration'];
$this->_sections['foo3']['index_prev'] = $this->_sections['foo3']['index'] - $this->_sections['foo3']['step'];
$this->_sections['foo3']['index_next'] = $this->_sections['foo3']['index'] + $this->_sections['foo3']['step'];
$this->_sections['foo3']['first']      = ($this->_sections['foo3']['iteration'] == 1);
$this->_sections['foo3']['last']       = ($this->_sections['foo3']['iteration'] == $this->_sections['foo3']['total']);
?>
	    #pg<?php echo $this->_sections['foo3']['index']; ?>
 { display: none; }
	<?php endfor; endif; ?>
	<?php $this->assign('dif', $this->_tpl_vars['cat2']-$this->_tpl_vars['rest']); ?>
	<?php $this->assign('dif2', $this->_tpl_vars['dif']+11); ?>
	<?php unset($this->_sections['foo4']);
$this->_sections['foo4']['name'] = 'foo4';
$this->_sections['foo4']['start'] = (int)$this->_tpl_vars['dif2'];
$this->_sections['foo4']['loop'] = is_array($_loop=$this->_tpl_vars['tpage']+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo4']['show'] = true;
$this->_sections['foo4']['max'] = $this->_sections['foo4']['loop'];
$this->_sections['foo4']['step'] = 1;
if ($this->_sections['foo4']['start'] < 0)
    $this->_sections['foo4']['start'] = max($this->_sections['foo4']['step'] > 0 ? 0 : -1, $this->_sections['foo4']['loop'] + $this->_sections['foo4']['start']);
else
    $this->_sections['foo4']['start'] = min($this->_sections['foo4']['start'], $this->_sections['foo4']['step'] > 0 ? $this->_sections['foo4']['loop'] : $this->_sections['foo4']['loop']-1);
if ($this->_sections['foo4']['show']) {
    $this->_sections['foo4']['total'] = min(ceil(($this->_sections['foo4']['step'] > 0 ? $this->_sections['foo4']['loop'] - $this->_sections['foo4']['start'] : $this->_sections['foo4']['start']+1)/abs($this->_sections['foo4']['step'])), $this->_sections['foo4']['max']);
    if ($this->_sections['foo4']['total'] == 0)
        $this->_sections['foo4']['show'] = false;
} else
    $this->_sections['foo4']['total'] = 0;
if ($this->_sections['foo4']['show']):

            for ($this->_sections['foo4']['index'] = $this->_sections['foo4']['start'], $this->_sections['foo4']['iteration'] = 1;
                 $this->_sections['foo4']['iteration'] <= $this->_sections['foo4']['total'];
                 $this->_sections['foo4']['index'] += $this->_sections['foo4']['step'], $this->_sections['foo4']['iteration']++):
$this->_sections['foo4']['rownum'] = $this->_sections['foo4']['iteration'];
$this->_sections['foo4']['index_prev'] = $this->_sections['foo4']['index'] - $this->_sections['foo4']['step'];
$this->_sections['foo4']['index_next'] = $this->_sections['foo4']['index'] + $this->_sections['foo4']['step'];
$this->_sections['foo4']['first']      = ($this->_sections['foo4']['iteration'] == 1);
$this->_sections['foo4']['last']       = ($this->_sections['foo4']['iteration'] == $this->_sections['foo4']['total']);
?>
	    #pg<?php echo $this->_sections['foo4']['index']; ?>
 { display: none; }
	<?php endfor; endif; ?>
    <?php endif; ?>
<?php endif; ?>