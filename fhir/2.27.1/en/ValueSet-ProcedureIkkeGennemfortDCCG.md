# Procedure Ikke Gennemført DCCG - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Procedure Ikke Gennemført DCCG**

## ValueSet: Procedure Ikke Gennemført DCCG 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ProcedureIkkeGennemfortDCCG | *Version*:2.27.1 |
| Active as of 2022-09-07 | *Computable Name*:ProcedureIkkeGennemfortDCCG |

 
Procedure Ikke Gennemført DCCG 

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
  "id" : "ProcedureIkkeGennemfortDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ProcedureIkkeGennemfortDCCG",
  "version" : "2.27.1",
  "name" : "ProcedureIkkeGennemfortDCCG",
  "title" : "Procedure Ikke Gennemført DCCG",
  "status" : "active",
  "date" : "2022-09-07T00:00:00+02:00",
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
  "description" : "Procedure Ikke Gennemført DCCG",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureNotCompleted",
      "concept" : [{
        "code" : "disease_progression",
        "display" : "Sygdomsprogression"
      },
      {
        "code" : "disease_regression",
        "display" : "Sygdomsregression"
      },
      {
        "code" : "comorbidity",
        "display" : "Komorbiditet"
      },
      {
        "code" : "patients_wish",
        "display" : "Patientønske"
      },
      {
        "code" : "death",
        "display" : "Dødsfald"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden eller ikke oplyst årsag"
      }]
    }]
  }
}

```
