# Patient respons på behandling (DAMYDA) - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient respons på behandling (DAMYDA)**

## ValueSet: Patient respons på behandling (DAMYDA) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TreatmentResponseDAMYDA | *Version*:2.17.1 |
| Active as of 2022-07-14 | *Computable Name*:TreatmentResponseDAMYDA |

 
Hvordan reagerer patienten på behandlingen [DAMYDA] 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "TreatmentResponseDAMYDA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TreatmentResponseDAMYDA",
  "version" : "2.17.1",
  "name" : "TreatmentResponseDAMYDA",
  "title" : "Patient respons på behandling (DAMYDA)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-14T00:00:00+02:00",
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
  "description" : "Hvordan reagerer patienten på behandlingen [DAMYDA]",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentResponseEvaluation",
        "concept" : [
          {
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
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
        "concept" : [
          {
            "code" : "mors",
            "display" : "Mors"
          }
        ]
      },
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
        "concept" : [
          {
            "code" : "UKN",
            "display" : "Ukendt"
          }
        ]
      }
    ]
  }
}

```
