# Written by Checkmk store


active_checks.setdefault('cmk_inv', [])

active_checks['cmk_inv'] = [
{'id': '7ba2ac2a-5a49-47ce-bc3c-1630fb191c7f', 'value': {'status_data_inventory': True}, 'condition': {'host_labels': {'cmk/docker_object': 'node'}}},
{'id': 'b4b151f9-c7cc-4127-87a6-9539931fcd73', 'value': {'status_data_inventory': True}, 'condition': {'host_labels': {'cmk/check_mk_server': 'yes'}}},
{'id': '2527cb37-e9da-4a15-a7d9-80825a7f6661', 'value': {'status_data_inventory': True}, 'condition': {'host_labels': {'cmk/kubernetes': 'yes'}}},
] + active_checks['cmk_inv']


globals().setdefault('bulkwalk_hosts', [])

bulkwalk_hosts = [
{'id': 'b92a5406-1d57-4f1d-953d-225b111239e5', 'value': True, 'condition': {'host_tags': {'snmp': 'snmp', 'snmp_ds': {'$ne': 'snmp-v1'}}}, 'options': {'description': 'Hosts with the tag "snmp-v1" must not use bulkwalk'}},
] + bulkwalk_hosts


extra_host_conf.setdefault('notification_options', [])

extra_host_conf['notification_options'] = [
{'id': '814bf932-6341-4f96-983d-283525b5416d', 'value': 'd,r,f,s', 'condition': {}},
] + extra_host_conf['notification_options']


extra_service_conf.setdefault('check_interval', [])

extra_service_conf['check_interval'] = [
{'id': 'b3847203-84b3-4f5b-ac67-0f06d4403905', 'value': 1440, 'condition': {'service_description': [{'$regex': 'Check_MK HW/SW Inventory$'}]}, 'options': {'description': 'Restrict HW/SW-Inventory to once a day'}},
] + extra_service_conf['check_interval']


globals().setdefault('host_check_commands', [])

host_check_commands = [
{'id': '24da4ccd-0d1b-40e3-af87-0097df8668f2', 'value': ('service', 'Docker container status'), 'condition': {'host_labels': {'cmk/docker_object': 'container'}}, 'options': {'description': 'Make all docker container host states base on the "Docker container status" service'}},
] + host_check_commands


globals().setdefault('host_contactgroups', [])

host_contactgroups = [
{'id': 'efd67dab-68f8-4d3c-a417-9f7e29ab48d5', 'value': 'all', 'condition': {}, 'options': {'description': 'Put all hosts into the contact group "all"'}},
] + host_contactgroups


globals().setdefault('inventory_df_rules', [])

inventory_df_rules = [
{'id': 'b0ee8a51-703c-47e4-aec4-76430281604d', 'value': {'ignore_fs_types': ['tmpfs', 'nfs', 'smbfs', 'cifs', 'iso9660'], 'never_ignore_mountpoints': ['~.*/omd/sites/[^/]+/tmp$']}, 'condition': {'host_labels': {'cmk/check_mk_server': 'yes'}}},
] + inventory_df_rules


globals().setdefault('management_bulkwalk_hosts', [])

management_bulkwalk_hosts = [
{'id': '59d84cde-ee3a-4f8d-8bec-fce35a2b0d15', 'value': True, 'condition': {}, 'options': {'description': 'All management boards use SNMPv2 and bulk walk'}},
] + management_bulkwalk_hosts


globals().setdefault('only_hosts', [])

if only_hosts is None:
    only_hosts = []

only_hosts = [
{'id': '10843c55-11ea-4eb2-bfbc-bce65cd2ae22', 'value': True, 'condition': {'host_tags': {'criticality': {'$ne': 'offline'}}}, 'options': {'description': 'Do not monitor hosts with the tag "offline"'}},
] + only_hosts


globals().setdefault('periodic_discovery', [])

periodic_discovery = [
{'id': '95a56ffc-f17e-44e7-a162-be656f19bedf', 'value': {'severity_unmonitored': 1, 'severity_vanished': 0, 'severity_new_host_label': 1, 'check_interval': 120.0}, 'condition': {}, 'options': {'description': 'Perform every two hours a service discovery'}},
] + periodic_discovery


globals().setdefault('ping_levels', [])

ping_levels = [
{'id': '0365b634-30bf-40a3-8516-08e86051508e', 'value': {'loss': (80.0, 100.0), 'packets': 6, 'timeout': 20, 'rta': (1500.0, 3000.0)}, 'condition': {'host_tags': {'networking': 'wan'}}, 'options': {'description': 'Allow longer round trip times when pinging WAN hosts'}},
] + ping_levels


