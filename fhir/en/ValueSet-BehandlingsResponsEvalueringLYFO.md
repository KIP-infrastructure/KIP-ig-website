# Responsevaluering på behandling (LYFO) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Responsevaluering på behandling (LYFO)**

## ValueSet: Responsevaluering på behandling (LYFO) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BehandlingsResponsEvalueringLYFO | *Version*:2.27.2 |
| Active as of 2022-07-18 | *Computable Name*:BehandlingsResponsEvalueringLYFO |

 
Responsevaluering på behandling (LYFO) 

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
  "id" : "BehandlingsResponsEvalueringLYFO",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BehandlingsResponsEvalueringLYFO",
  "version" : "2.27.2",
  "name" : "BehandlingsResponsEvalueringLYFO",
  "title" : "Responsevaluering på behandling (LYFO)",
  "status" : "active",
  "date" : "2022-07-18T00:00:00+02:00",
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
  "description" : "Responsevaluering på behandling (LYFO)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentResponseEvaluation",
      "concept" : [{
        "code" : "complete_remission_metabolic_structurally",
        "display" : "CR (metabolisk og skrukturelt CR, bedømt med PET/CT)"
      },
      {
        "code" : "complete_remission_metabolic",
        "display" : "CR (metabolisk CR, men med strukturel restsygdom, bedømt med PET/CT)"
      },
      {
        "code" : "complete_remission",
        "display" : "CR (bedømt med CT og/eller klinisk)"
      },
      {
        "code" : "uncertain_complete_remission",
        "display" : "Cru"
      },
      {
        "code" : "partial_remission",
        "display" : "PR"
      },
      {
        "code" : "stable_disease",
        "display" : "SD/NC"
      },
      {
        "code" : "progressive_disease",
        "display" : "PD"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "not_performed",
        "display" : "Ej evalueret"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
      "concept" : [{
        "code" : "mors",
        "display" : "Mors (før evaluering)"
      }]
    }]
  }
}

```
