# Patient respons på behandling (ALD) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient respons på behandling (ALD)**

## ValueSet: Patient respons på behandling (ALD) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TreatmentResponseALD | *Version*:2.27.0 |
| Active as of 2022-07-13 | *Computable Name*:TreatmentResponseALD |

 
Hvordan reagerer patienten på behandlingen [ALD] 

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
  "id" : "TreatmentResponseALD",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TreatmentResponseALD",
  "version" : "2.27.0",
  "name" : "TreatmentResponseALD",
  "title" : "Patient respons på behandling (ALD)",
  "status" : "active",
  "date" : "2022-07-13T00:00:00+02:00",
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
  "description" : "Hvordan reagerer patienten på behandlingen [ALD]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentResponseEvaluation",
      "concept" : [{
        "code" : "complete_remission",
        "display" : "Complete Remission"
      },
      {
        "code" : "partial_remission",
        "display" : "Partiel Remission"
      },
      {
        "code" : "stable_disease",
        "display" : "Stable Disease"
      },
      {
        "code" : "progressive_disease",
        "display" : "Progressive Disease"
      },
      {
        "code" : "uncertain_response",
        "display" : "Usikkert respons"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
      "concept" : [{
        "code" : "mors",
        "display" : "Mors (før evaluering)"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "not_performed",
        "display" : "Ej evalueret"
      }]
    }]
  }
}

```
