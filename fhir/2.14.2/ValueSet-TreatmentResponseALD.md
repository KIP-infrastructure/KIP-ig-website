# Patient respons på behandling (ALD) - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient respons på behandling (ALD)**

## ValueSet: Patient respons på behandling (ALD) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TreatmentResponseALD | *Version*:2.14.2 |
| Active as of 2022-07-13 | *Computable Name*:TreatmentResponseALD |

 
Hvordan reagerer patienten på behandlingen [ALD] 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 7 concepts

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
  "id" : "TreatmentResponseALD",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TreatmentResponseALD",
  "version" : "2.14.2",
  "name" : "TreatmentResponseALD",
  "title" : "Patient respons på behandling (ALD)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-13T00:00:00+02:00",
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
  "description" : "Hvordan reagerer patienten på behandlingen [ALD]",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentResponseEvaluation",
        "concept" : [
          {
            "code" : "complete_remission",
            "display" : "Complete Remission"
          },
          {
            "code" : "partial_remission",
            "display" : "Partiel Remission"
          },
          {
            "code" : "stable_disease",
            "display" : "Stable Disease"
          },
          {
            "code" : "progressive_disease",
            "display" : "Progressive Disease"
          },
          {
            "code" : "uncertain_response",
            "display" : "Usikkert respons"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
        "concept" : [
          {
            "code" : "mors",
            "display" : "Mors (før evaluering)"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "not_performed",
            "display" : "Ej evalueret"
          }
        ]
      }
    ]
  }
}

```
