# Observationssted anæstesi - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observationssted anæstesi**

## ValueSet: Observationssted anæstesi 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ObservationsstedAN | *Version*:2.27.1 |
| Active as of 2022-05-16 | *Computable Name*:ObservationsstedAN |

 
Observationssted anæstesi 

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
  "id" : "ObservationsstedAN",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ObservationsstedAN",
  "version" : "2.27.1",
  "name" : "ObservationsstedAN",
  "title" : "Observationssted anæstesi",
  "status" : "active",
  "date" : "2022-05-16T00:00:00+02:00",
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
  "description" : "Observationssted anæstesi",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Observationssted",
      "concept" : [{
        "code" : "central_obs",
        "display" : "Centralt observationsafsnit"
      },
      {
        "code" : "andet_obs",
        "display" : "Andet observationsafsnit"
      },
      {
        "code" : "opergang",
        "display" : "Operationsgangen"
      },
      {
        "code" : "intensiv",
        "display" : "Intensiv"
      },
      {
        "code" : "sengeafd",
        "display" : "Sengeafdeling"
      },
      {
        "code" : "skadestue",
        "display" : "Skadestue / modtagelse"
      }]
    }]
  }
}

```
