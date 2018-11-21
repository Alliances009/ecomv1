/**
 * @class Traspac.components.tree.Jabatan
 * @extends Ext.tree.Panel
 * requires 
 * @autor Rizky Atmawijaya
 * @date Rabu, 17 Sep 2014 19:13:29
 *
 * @Description
 * Building component Jabatan for traspac application
 * This Jabatan is created to be show strukturals data jabatan with tree component. 
 *
 **/

Ext.define("Traspac.components.tree.Penghargaan",{
	extend		: "Traspac.abstract.Tree",
	alias: 'widget.treepenghargaan',
	
	fields:["id","text","keterangan"],
	
	rootVisible:false,
	initComponent	: function(a) {
		this.callParent([arguments]);
	},
	getIdroot:function(){
		return '0';
	},
	getURL:function(){
		return Traspac.Constants.MASTER_URL+'/c_penghargaan/getTreePenghargaan2';
	},

	getColumns:function(){
		if(this.columns=='unknown')
			return [{
				xtype: 'treecolumn', 
				text: 'Penghargaan',
				flex: 1,
				sortable: true,
				dataIndex: 'text',
			}];
		else return this.columns;
	}
});