# Reasons for procedure - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Reasons for procedure**

## CodeSystem: Reasons for procedure 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ProcedureReasons | *Version*:2.16.0 |
| Active as of 2022-06-03 | *Computable Name*:ProcedureReasons |

 
Reasons for procedure 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AarsagTilProcedureDCCG](ValueSet-AarsagTilProcedureDCCG.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ProcedureReasons",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureReasons",
  "version" : "2.16.0",
  "name" : "ProcedureReasons",
  "title" : "Reasons for procedure",
  "status" : "active",
  "date" : "2022-06-03T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Reasons for procedure",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "patients_wish",
      "display" : "Patient's wish",
      "definition" : "Patient's wish / Patientønske"
    },
    {
      "code" : "non_resectable",
      "display" : "Non resectable",
      "definition" : "Non resectable / Ikke resektabel"
    },
    {
      "code" : "non_operable",
      "display" : "Non operable",
      "definition" : "Patienten er blevet non-operabel"
    },
    {
      "code" : "disseminated_disease",
      "display" : "Disseminated disease",
      "definition" : "Disseminated disease / Dissemineret sygdom"
    }
  ]
}

```
