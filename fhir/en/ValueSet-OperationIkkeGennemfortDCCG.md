# Operation Ikke Gennemført (DCCG) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operation Ikke Gennemført (DCCG)**

## ValueSet: Operation Ikke Gennemført (DCCG) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperationIkkeGennemfortDCCG | *Version*:2.27.0 |
| Active as of 2022-11-08 | *Computable Name*:OperationIkkeGennemfortDCCG |

 
Operation Ikke Gennemført: Årsag (DCCG) 

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
  "id" : "OperationIkkeGennemfortDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperationIkkeGennemfortDCCG",
  "version" : "2.27.0",
  "name" : "OperationIkkeGennemfortDCCG",
  "title" : "Operation Ikke Gennemført (DCCG)",
  "status" : "active",
  "date" : "2022-11-08T00:00:00+02:00",
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
  "description" : "Operation Ikke Gennemført: Årsag (DCCG)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureNotCompleted",
      "concept" : [{
        "code" : "patients_wish",
        "display" : "Patient afslag"
      },
      {
        "code" : "comorbidity",
        "display" : "Komorbiditet"
      },
      {
        "code" : "disseminated_intestinal_cancer",
        "display" : "Dissemineret tarmkræft"
      },
      {
        "code" : "other_cancer",
        "display" : "Anden cancersygdom"
      },
      {
        "code" : "curative_treatment",
        "display" : "Henvist til kurativ onkologisk behandling"
      },
      {
        "code" : "palliative_treatment",
        "display" : "Henvist til pallierende onkologisk behandling"
      },
      {
        "code" : "death",
        "display" : "Død"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden årsag"
      }]
    }]
  }
}

```
