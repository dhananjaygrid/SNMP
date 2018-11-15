# SNMP
## 1) Subagent.txt and snmpd.conf create custom OIDs.
## 2) Prober is a python script that calculates rate of change of OIDs.
## 3) Backend is a python script that sends rate of change of OID values to Influx DB, followed by visualization in grafana
## 4) A4 consists of PHP API's and Perl scripts that can handle SNMP traps.
