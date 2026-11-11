# Caputnekrose (DSR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Caputnekrose (DSR)**

## ValueSet: Caputnekrose (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CaputnekroseDSR | *Version*:2.27.2 |
| Active as of 2022-10-05 | *Computable Name*:CaputnekroseDSR |

 
Caputnekrose (DSR) 

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
  "id" : "CaputnekroseDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CaputnekroseDSR",
  "version" : "2.27.2",
  "name" : "CaputnekroseDSR",
  "title" : "Caputnekrose (DSR)",
  "status" : "active",
  "date" : "2022-10-05T00:00:00+02:00",
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
  "description" : "Caputnekrose (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BasicDisorder",
      "concept" : [{
        "code" : "fracture",
        "display" : "Frakturfølge"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden / ukendt årsag"
      }]
    }]
  }
}

```
