# Observation afdeling - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation afdeling**

## ValueSet: Observation afdeling 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ObservationAfdeling | *Version*:2.27.0 |
| Active as of 2024-02-21 | *Computable Name*:ObservationAfdeling |

 
Observation af patienten på egen eller anden afdeling 

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
  "id" : "ObservationAfdeling",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ObservationAfdeling",
  "version" : "2.27.0",
  "name" : "ObservationAfdeling",
  "title" : "Observation afdeling",
  "status" : "active",
  "date" : "2024-02-21T00:00:00+02:00",
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
  "description" : "Observation af patienten på egen eller anden afdeling",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Observationssted",
      "concept" : [{
        "code" : "egenafd",
        "display" : "Egen afdeling"
      },
      {
        "code" : "andet",
        "display" : "Anden afdeling"
      }]
    }]
  }
}

```
