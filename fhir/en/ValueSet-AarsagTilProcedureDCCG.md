# Årsag til anden/aflastende procedure colorectal cancer - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Årsag til anden/aflastende procedure colorectal cancer**

## ValueSet: Årsag til anden/aflastende procedure colorectal cancer 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AarsagTilProcedureDCCG | *Version*:2.27.1 |
| Active as of 2022-10-04 | *Computable Name*:AarsagTilProcedureDCCG |

 
Årsag til anden/aflastende procedure colorectal cancer 

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
  "id" : "AarsagTilProcedureDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AarsagTilProcedureDCCG",
  "version" : "2.27.1",
  "name" : "AarsagTilProcedureDCCG",
  "title" : "Årsag til anden/aflastende procedure colorectal cancer",
  "status" : "active",
  "date" : "2022-10-04T00:00:00+02:00",
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
  "description" : "Årsag til anden/aflastende procedure colorectal cancer",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureReasons",
      "concept" : [{
        "code" : "patients_wish",
        "display" : "Patientønske"
      },
      {
        "code" : "non_resectable",
        "display" : "Tumor ikke resektabel"
      },
      {
        "code" : "non_operable",
        "display" : "Patienten er non-operabel"
      },
      {
        "code" : "disseminated_disease",
        "display" : "Dissemineret tarmkræft"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden begrundelse"
      }]
    }]
  }
}

```
