# Anæstesi komplikationer - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anæstesi komplikationer**

## ValueSet: Anæstesi komplikationer (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ComplicationAN | *Version*:2.15.0 |
| Active as of 2022-06-01 | *Computable Name*:ComplicationAN |

 
Anæstesi komplikationer 

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
  "id" : "ComplicationAN",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ComplicationAN",
  "version" : "2.15.0",
  "name" : "ComplicationAN",
  "title" : "Anæstesi komplikationer",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-06-01T00:00:00+02:00",
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
  "description" : "Anæstesi komplikationer",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
        "concept" : [
          {
            "code" : "anafylSchock",
            "display" : "Anafylaktisk reaktion/shock"
          },
          {
            "code" : "anInterrupt",
            "display" : "Anæstesi afbrudt"
          },
          {
            "code" : "appFailure",
            "display" : "Apparaturfejl"
          },
          {
            "code" : "aspiration",
            "display" : "Aspiration"
          },
          {
            "code" : "duraptAcc",
            "display" : "Durapunktur accidentel"
          },
          {
            "code" : "heartFail",
            "display" : "Hjertestop"
          },
          {
            "code" : "huskeAN",
            "display" : "Huskeanæstesi"
          },
          {
            "code" : "malignHyp",
            "display" : "Malign Hypertermi mistanke"
          },
          {
            "code" : "medFail",
            "display" : "Medicineringsfejl"
          },
          {
            "code" : "neuMuscBlock",
            "display" : "Neuromuskulær blokade, forlænget virkning"
          },
          {
            "code" : "dentInj",
            "display" : "Tandskade"
          },
          {
            "code" : "mors",
            "display" : "Mors, uventet"
          }
        ]
      }
    ]
  }
}

```
