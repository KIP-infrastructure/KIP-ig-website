# Operation - aktuel (DKRR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operation - aktuel (DKRR)**

## ValueSet: Operation - aktuel (DKRR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperationerAktuelDKRR | *Version*:2.27.0 |
| Active as of 2022-09-19 | *Computable Name*:OperationerAktuelDKRR |

 
Operation - aktuel (DKRR) 

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
  "id" : "OperationerAktuelDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperationerAktuelDKRR",
  "version" : "2.27.0",
  "name" : "OperationerAktuelDKRR",
  "title" : "Operation - aktuel (DKRR)",
  "status" : "active",
  "date" : "2022-09-19T00:00:00+02:00",
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
  "description" : "Operation - aktuel (DKRR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/OperationType",
      "concept" : [{
        "code" : "primary",
        "display" : "Primær rekonstruktion af forreste korsbånd"
      },
      {
        "code" : "revision",
        "display" : "Revisionsrekonstruktion"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "multiple_ligaments_reconstruction",
        "display" : "Flerligament-rekonstruktion (Inkl. isoleret PCL, LCL, MCL)"
      }]
    }]
  }
}

```
