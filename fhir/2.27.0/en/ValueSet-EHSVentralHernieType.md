# EHS ventral hernie type - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EHS ventral hernie type**

## ValueSet: EHS ventral hernie type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/EHSVentralHernieType | *Version*:2.27.0 |
| Active as of 2023-07-06 | *Computable Name*:EHSVentralHernieType |

 
EHS ventral hernie type - lateral højre/venstre og midtlinje 

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
  "id" : "EHSVentralHernieType",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/EHSVentralHernieType",
  "version" : "2.27.0",
  "name" : "EHSVentralHernieType",
  "title" : "EHS ventral hernie type",
  "status" : "active",
  "date" : "2023-07-06T00:00:00+02:00",
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
  "description" : "EHS ventral hernie type - lateral højre/venstre og midtlinje",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/EHSIncisionalHerniaClassificationType",
      "concept" : [{
        "code" : "ehslr",
        "display" : "EHS-klassifikation lateral - Højre"
      },
      {
        "code" : "ehsm",
        "display" : "EHS-klassifikation - Midtlinje"
      },
      {
        "code" : "ehsll",
        "display" : "EHS-klassifikation lateral - Venstre"
      }]
    }]
  }
}

```
