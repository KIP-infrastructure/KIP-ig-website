# Operationssår komplikationer (KAR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operationssår komplikationer (KAR)**

## ValueSet: Operationssår komplikationer (KAR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperationssaarKomplikationerKAR | *Version*:2.27.2 |
| Active as of 2022-09-27 | *Computable Name*:OperationssaarKomplikationerKAR |

 
Operationssår komplikationer (KAR) 

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
  "id" : "OperationssaarKomplikationerKAR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperationssaarKomplikationerKAR",
  "version" : "2.27.2",
  "name" : "OperationssaarKomplikationerKAR",
  "title" : "Operationssår komplikationer (KAR)",
  "status" : "active",
  "date" : "2022-09-27T00:00:00+02:00",
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
  "description" : "Operationssår komplikationer (KAR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
      "concept" : [{
        "code" : "hematoma",
        "display" : "operationskrævende hæmatom"
      },
      {
        "code" : "lymph_leakage",
        "display" : "lymfesiven over 2 døgn (forlænger indlæggelsen)"
      },
      {
        "code" : "necrosis",
        "display" : "operationskrævende randnekrose"
      },
      {
        "code" : "lymphocele",
        "display" : "operationskrævende lymfocele"
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
