<?php
// Created by WATO
global $mk_hosttags, $mk_auxtags;
$mk_hosttags = array(
    'criticality' => array(
        null,
        'Criticality',
        array(
            'prod' => array(
                'Productive system',
                array(
                ),
            ),
            'critical' => array(
                'Business critical',
                array(
                ),
            ),
            'test' => array(
                'Test system',
                array(
                ),
            ),
            'offline' => array(
                'Do not monitor this host',
                array(
                ),
            ),
        ),
    ),
    'networking' => array(
        null,
        'Networking Segment',
        array(
            'lan' => array(
                'Local network (low latency)',
                array(
                ),
            ),
            'wan' => array(
                'WAN (high latency)',
                array(
                ),
            ),
            'dmz' => array(
                'DMZ (low latency, secure access)',
                array(
                ),
            ),
        ),
    ),
    'agent' => array(
        'Monitoring agents',
        'Checkmk agent / API integrations',
        array(
            'cmk-agent' => array(
                'API integrations if configured, else Checkmk agent',
                array(
                    'tcp',
                    'checkmk-agent',
                ),
            ),
            'all-agents' => array(
                'Configured API integrations and Checkmk agent',
                array(
                    'tcp',
                    'checkmk-agent',
                ),
            ),
            'special-agents' => array(
                'Configured API integrations, no Checkmk agent',
                array(
                    'tcp',
                ),
            ),
            'no-agent' => array(
                'No API integrations, no Checkmk agent',
                array(
                ),
            ),
        ),
    ),
    'piggyback' => array(
        'Monitoring agents',
        'Piggyback',
        array(
            'auto-piggyback' => array(
                'Use piggyback data from other hosts if present',
                array(
                ),
            ),
            'piggyback' => array(
                'Always use and expect piggyback data',
                array(
                ),
            ),
            'no-piggyback' => array(
                'Never use piggyback data',
                array(
                ),
            ),
        ),
    ),
    'snmp_ds' => array(
        'Monitoring agents',
        'SNMP',
        array(
            'no-snmp' => array(
                'No SNMP',
                array(
                ),
            ),
            'snmp-v2' => array(
                'SNMP v2 or v3',
                array(
                    'snmp',
                ),
            ),
            'snmp-v1' => array(
                'SNMP v1',
                array(
                    'snmp',
                ),
            ),
        ),
    ),
    'address_family' => array(
        'Address',
        'IP address family',
        array(
            'ip-v4-only' => array(
                'IPv4 only',
                array(
                    'ip-v4',
                ),
            ),
            'ip-v6-only' => array(
                'IPv6 only',
                array(
                    'ip-v6',
                ),
            ),
            'ip-v4v6' => array(
                'IPv4/IPv6 dual-stack',
                array(
                    'ip-v4',
                    'ip-v6',
                ),
            ),
            'no-ip' => array(
                'No IP',
                array(
                ),
            ),
        ),
    ),
);
$mk_auxtags = array(
    'ip-v4' => 'IPv4',
    'ip-v6' => 'IPv6',
    'snmp' => 'Monitor via SNMP',
    'tcp' => 'Monitor via Checkmk Agent or special agent',
    'checkmk-agent' => 'Monitor via Checkmk Agent',
    'ping' => 'Only ping this device',
);

function taggroup_title($group_id) {
    global $mk_hosttags;
    if (isset($mk_hosttags[$group_id]))
        return $mk_hosttags[$group_id][0];
    else
        return $taggroup;
}

function taggroup_choice($group_id, $object_tags) {
    global $mk_hosttags;
    if (!isset($mk_hosttags[$group_id]))
        return false;
    foreach ($object_tags AS $tag) {
        if (isset($mk_hosttags[$group_id][2][$tag])) {
            // Found a match of the objects tags with the taggroup
            // now return an array of the matched tag and its alias
            return array($tag, $mk_hosttags[$group_id][2][$tag][0]);
        }
    }
    // no match found. Test whether or not a "None" choice is allowed
    if (isset($mk_hosttags[$group_id][2][null]))
        return array(null, $mk_hosttags[$group_id][2][null][0]);
    else
        return null; // no match found
}

function all_taggroup_choices($object_tags) {
    global $mk_hosttags;
    $choices = array();
    foreach ($mk_hosttags AS $group_id => $group) {
        $choices[$group_id] = array(
            'topic' => $group[0],
            'title' => $group[1],
            'value' => taggroup_choice($group_id, $object_tags),
        );
    }
    return $choices;
}

?>
