"C:\Program Files\PuTTY\plink.exe" -ssh -batch __HIDDEN__ "sudo /opt/vyatta/bin/vyatta-op-cmd-wrapper show dhcp leases pool net_{networkScopeName} | grep "{IP-ADDRESS}" | wc -l" > aantal.log  