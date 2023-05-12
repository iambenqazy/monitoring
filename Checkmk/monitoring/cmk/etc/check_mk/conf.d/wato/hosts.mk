# Created by HostStorage

all_hosts += ['ACTIVE-DIST-SW01']

host_tags.update({'ACTIVE-DIST-SW01': {'site': 'cmk', 'address_family': 'ip-v4-only', 'ip-v4': 'ip-v4', 'agent': 'cmk-agent', 'tcp': 'tcp', 'checkmk-agent': 'checkmk-agent', 'piggyback': 'auto-piggyback', 'snmp_ds': 'snmp-v2', 'snmp': 'snmp', 'criticality': 'prod', 'networking': 'lan'}})

# ipaddresses
ipaddresses.update({'ACTIVE-DIST-SW01': '10.11.30.11'})

# explicit_snmp_communities
explicit_snmp_communities.update({'ACTIVE-DIST-SW01': 'OLAG-NETWORK'})

# Host attributes (needed for WATO)
host_attributes.update({'ACTIVE-DIST-SW01': {'ipaddress': '10.11.30.11', 'snmp_community': 'OLAG-NETWORK', 'tag_snmp_ds': 'snmp-v2', 'meta_data': {'created_at': 1683415915.7335002, 'updated_at': 1683415916.0889964, 'created_by': 'cmkadmin'}}})

folder_attributes.update({})
