# Risikovurdering (RETSPSYK) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Risikovurdering (RETSPSYK)**

## ValueSet: Risikovurdering (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RisikovurderingRETSPSYK | *Version*:2.27.2 |
| Active as of 2022-09-30 | *Computable Name*:RisikovurderingRETSPSYK |

 
Risikovurdering (RETSPSYK) 

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
  "id" : "RisikovurderingRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RisikovurderingRETSPSYK",
  "version" : "2.27.2",
  "name" : "RisikovurderingRETSPSYK",
  "title" : "Risikovurdering (RETSPSYK)",
  "status" : "active",
  "date" : "2022-09-30T00:00:00+02:00",
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
  "description" : "Risikovurdering (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/RiskAssessment",
      "concept" : [{
        "code" : "hcr-20",
        "display" : "HCR-20"
      },
      {
        "code" : "start",
        "display" : "START"
      },
      {
        "code" : "saprof",
        "display" : "SAPROF"
      },
      {
        "code" : "rsvp",
        "display" : "RSVP"
      },
      {
        "code" : "v-risk-10",
        "display" : "V-RISK-10/V-Risk Young"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
