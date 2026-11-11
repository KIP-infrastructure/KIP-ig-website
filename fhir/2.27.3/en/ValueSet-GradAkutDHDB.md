# Grad af akut (DHDB) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Grad af akut (DHDB)**

## ValueSet: Grad af akut (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/GradAkutDHDB | *Version*:2.27.3 |
| Active as of 2024-09-10 | *Computable Name*:GradAkutDHDB |

 
Grad af akut (DHDB) 

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
  "id" : "GradAkutDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/GradAkutDHDB",
  "version" : "2.27.3",
  "name" : "GradAkutDHDB",
  "title" : "Grad af akut (DHDB)",
  "status" : "active",
  "date" : "2024-09-10T00:00:00+02:00",
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
  "description" : "Grad af akut (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Priority",
      "concept" : [{
        "code" : "24hrs",
        "display" : "Indenfor 24 timer"
      },
      {
        "code" : "72hrs",
        "display" : "Indenfor 72 timer"
      },
      {
        "code" : "14days",
        "display" : "Indenfor 14 dage"
      }]
    }]
  }
}

```
