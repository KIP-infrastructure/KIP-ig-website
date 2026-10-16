# Patient respons på behandling (DAMYDA) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient respons på behandling (DAMYDA)**

## ValueSet: Patient respons på behandling (DAMYDA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TreatmentResponseDAMYDA | *Version*:2.27.0 |
| Active as of 2022-07-14 | *Computable Name*:TreatmentResponseDAMYDA |

 
Hvordan reagerer patienten på behandlingen [DAMYDA] 

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
  "id" : "TreatmentResponseDAMYDA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TreatmentResponseDAMYDA",
  "version" : "2.27.0",
  "name" : "TreatmentResponseDAMYDA",
  "title" : "Patient respons på behandling (DAMYDA)",
  "status" : "active",
  "date" : "2022-07-14T00:00:00+02:00",
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
  "description" : "Hvordan reagerer patienten på behandlingen [DAMYDA]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentResponseEvaluation",
      "concept" : [{
        "code" : "stringent_complete_response",
        "display" : "Stringent Complete Response"
      },
      {
        "code" : "complete_response",
        "display" : "Complete Response"
      },
      {
        "code" : "presumed_complete_response",
        "display" : "Formodet CR"
      },
      {
        "code" : "very_good_partial_response",
        "display" : "Very Good Partiel Response"
      },
      {
        "code" : "partial_response",
        "display" : "Partiel Response"
      },
      {
        "code" : "minimal_response",
        "display" : "Minimal Response"
      },
      {
        "code" : "stable_disease",
        "display" : "Stable Disease (No change/plateau)"
      },
      {
        "code" : "progressive_disease",
        "display" : "Progressive Disease"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
      "concept" : [{
        "code" : "mors",
        "display" : "Mors"
      }]
    },
    {
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "UKN",
        "display" : "Ukendt"
      }]
    }]
  }
}

```
