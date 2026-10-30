# SKS: Apopleksi diagnoser - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SKS: Apopleksi diagnoser**

## ValueSet: SKS: Apopleksi diagnoser 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SKSApopleksiDiagnoser | *Version*:2.27.1 |
| Active as of 2022-06-21 | *Computable Name*:SKSApopleksiDiagnoser |

 
SKS koderne relevante Apopleksi databasen (DAP) 

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
  "id" : "SKSApopleksiDiagnoser",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SKSApopleksiDiagnoser",
  "version" : "2.27.1",
  "name" : "SKSApopleksiDiagnoser",
  "title" : "SKS: Apopleksi diagnoser",
  "status" : "active",
  "date" : "2022-06-21T00:00:00+02:00",
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
  "description" : "SKS koderne relevante Apopleksi databasen (DAP)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "DI60",
        "display" : "Aneurysmal Subarachnoidalblødning (SAH I60)"
      },
      {
        "code" : "DI61",
        "display" : "Hjerneblødning  (ICH I61)"
      },
      {
        "code" : "DI63",
        "display" : "Hjerneinfarkt  (I63)"
      },
      {
        "code" : "DI64",
        "display" : "Akut apopleksi uden specifikation (I64)"
      },
      {
        "code" : "DG45",
        "display" : "Transitorisk cerebral iskæmi og beslægtede syndromer (TIA) (G45)"
      }]
    }]
  }
}

```
