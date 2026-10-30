# Præoperativ planlægning (DSR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Præoperativ planlægning (DSR)**

## ValueSet: Præoperativ planlægning (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PraeoperativPlanlaegningDSR | *Version*:2.27.1 |
| Active as of 2022-10-06 | *Computable Name*:PraeoperativPlanlaegningDSR |

 
Præoperativ planlægning (DSR) 

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
  "id" : "PraeoperativPlanlaegningDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PraeoperativPlanlaegningDSR",
  "version" : "2.27.1",
  "name" : "PraeoperativPlanlaegningDSR",
  "title" : "Præoperativ planlægning (DSR)",
  "status" : "active",
  "date" : "2022-10-06T00:00:00+02:00",
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
  "description" : "Præoperativ planlægning (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalScanningTypes",
      "concept" : [{
        "code" : "x-ray",
        "display" : "Røntgen <½ år"
      },
      {
        "code" : "ct",
        "display" : "CT"
      },
      {
        "code" : "mri",
        "display" : "MR"
      },
      {
        "code" : "ultrasound",
        "display" : "Ultralyd"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "templating",
        "display" : "Templating"
      },
      {
        "code" : "psi",
        "display" : "PSI (Patient specifikke instrumenter)"
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
