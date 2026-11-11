# Dialyseopstart (DNSL) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dialyseopstart (DNSL)**

## ValueSet: Dialyseopstart (DNSL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DialyseOpstartDNSL | *Version*:2.27.3 |
| Active as of 2024-01-10 | *Computable Name*:DialyseOpstartDNSL |

 
Dialyseopstart ved første dialyse (DNSL) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "DialyseOpstartDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DialyseOpstartDNSL",
  "version" : "2.27.3",
  "name" : "DialyseOpstartDNSL",
  "title" : "Dialyseopstart (DNSL)",
  "status" : "active",
  "date" : "2024-01-10T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Dialyseopstart ved første dialyse (DNSL)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Cyclus",
      "concept" : [{
        "code" : "ge7-dage",
        "display" : "PD opstart >6 dage efter kateteranlæggelse"
      },
      {
        "code" : "0-6-dage",
        "display" : "PD opstart 0-6 dage efter kateteranlæggelse"
      }]
    }]
  }
}

```
