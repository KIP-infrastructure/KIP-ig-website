# Stomi type (DHDB) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Stomi type (DHDB)**

## ValueSet: Stomi type (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/StomiTypeDHDB | *Version*:2.27.1 |
| Active as of 2022-07-20 | *Computable Name*:StomiTypeDHDB |

 
Stomi type (DHDB) 

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
  "id" : "StomiTypeDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/StomiTypeDHDB",
  "version" : "2.27.1",
  "name" : "StomiTypeDHDB",
  "title" : "Stomi type (DHDB)",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Stomi type (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
      "concept" : [{
        "code" : "colostomy",
        "display" : "Colostomi"
      },
      {
        "code" : "ileostomy",
        "display" : "Ileostomi"
      },
      {
        "code" : "urologicalstomy",
        "display" : "Urostomi"
      }]
    }]
  }
}

```
