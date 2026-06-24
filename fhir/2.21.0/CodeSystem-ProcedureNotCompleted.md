# Procedure not completed; cause - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Procedure not completed; cause**

## CodeSystem: Procedure not completed; cause 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ProcedureNotCompleted | *Version*:2.21.0 |
| Active as of 2022-08-22 | *Computable Name*:ProcedureNotCompleted |

 
Procedure not completed; cause 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BegrundelseEndoskopiskLokalresektioen](ValueSet-BegrundelseEndoskopiskLokalresektioen.md)
* [BehandlinsplanAendretAarsagDCCG](ValueSet-BehandlinsplanAendretAarsagDCCG.md)
* [OperationIkkeGennemfortDCCG](ValueSet-OperationIkkeGennemfortDCCG.md)
* [ProcedureIkkeGennemfortDCCG](ValueSet-ProcedureIkkeGennemfortDCCG.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ProcedureNotCompleted",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureNotCompleted",
  "version" : "2.21.0",
  "name" : "ProcedureNotCompleted",
  "title" : "Procedure not completed; cause",
  "status" : "active",
  "date" : "2022-08-22T00:00:00+02:00",
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
  "description" : "Procedure not completed; cause",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 9,
  "property" : [{
    "code" : "comment",
    "uri" : "http://hl7.org/fhir/concept-properties#comment",
    "description" : "A string that provides additional detail pertinent to the use or understanding of the concept",
    "type" : "string"
  },
  {
    "code" : "effectiveDate",
    "uri" : "http://hl7.org/fhir/concept-properties#effectiveDate",
    "description" : "The date at which the concept status was last changed",
    "type" : "dateTime"
  },
  {
    "code" : "status",
    "uri" : "http://hl7.org/fhir/concept-properties#status",
    "description" : "A code that indicates the status of the concept. Typical values are active, experimental, deprecated, and retired",
    "type" : "code"
  },
  {
    "code" : "inactive",
    "uri" : "http://hl7.org/fhir/concept-properties#inactive",
    "description" : "True if the concept is not considered active - e.g. not a valid concept any more. Property type is boolean, default value is false. Note that the status property may also be used to indicate that a concept is inactive",
    "type" : "boolean"
  }],
  "concept" : [{
    "code" : "disease_progression",
    "display" : "Progression of disease",
    "definition" : "Progression of disease / Sygdomsprogression"
  },
  {
    "code" : "disease_regression",
    "display" : "Regression of disease",
    "definition" : "Regression of disease / Sygdomsregression"
  },
  {
    "code" : "disseminated_intestinal_cancer",
    "display" : "Disseminated intestinal cancer",
    "definition" : "Disseminated intestinal cancer / Dissemineret tarmkræft"
  },
  {
    "code" : "other_cancer",
    "display" : "Other cancer",
    "definition" : "Other cancer / Anden cancersygdom"
  },
  {
    "code" : "curative_treatment",
    "display" : "Other curative oncological treatment",
    "definition" : "Other curative oncological treatment / Kurativ onkologisk behandling"
  },
  {
    "code" : "palliative_treatment",
    "display" : "Other palliative oncological treatment",
    "definition" : "Other palliative oncological treatment / Pallierende onkologisk behandling"
  },
  {
    "code" : "comorbidity",
    "display" : "Comorbidity",
    "definition" : "Comorbidity / Komorbiditet"
  },
  {
    "code" : "patients_wish",
    "display" : "Patient's wish",
    "definition" : "Patient's wish / Patientønske"
  },
  {
    "code" : "death",
    "display" : "Death",
    "definition" : "Death / Dødsfald"
  }]
}

```
