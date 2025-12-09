# ATC DMPN 202410 - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ATC DMPN 202410**

## ValueSet: ATC DMPN 202410 (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ATCDMPN202410 | *Version*:2.17.1 |
| Active as of 2024-10-02 | *Computable Name*:ATCDMPN202410 |

 
ATC koder DMPN behandling. Valueset erstatter tidligere fra okt. 2024 

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
  "id" : "ATCDMPN202410",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ATCDMPN202410",
  "version" : "2.17.1",
  "name" : "ATCDMPN202410",
  "title" : "ATC DMPN 202410",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-10-02T00:00:00+02:00",
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
  "description" : "ATC koder DMPN behandling. Valueset erstatter tidligere fra okt. 2024",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ATC",
        "concept" : [
          {
            "code" : "B01AC06",
            "display" : "Acetylsalicylsyre (ASA)"
          },
          {
            "code" : "L01XX35",
            "display" : "Anagrelid"
          },
          {
            "code" : "L01AB01",
            "display" : "Busulfan (Myleran)"
          },
          {
            "code" : "L01XX05",
            "display" : "Hydroxcarbamid"
          },
          {
            "code" : "C10AA",
            "display" : "Statiner"
          },
          {
            "code" : "L03AB",
            "display" : "Interferon"
          },
          {
            "code" : "L0EJ",
            "display" : "JAKi"
          },
          {
            "code" : "B01A",
            "display" : "Anden blodfortyndende behandling"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentUnspecified",
        "concept" : [
          {
            "code" : "incision_vein",
            "display" : "Venesectio"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "Anden behandling"
          }
        ]
      }
    ]
  }
}

```
