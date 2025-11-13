# Komplikationer, behandling (DEGC) - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komplikationer, behandling (DEGC)**

## ValueSet: Komplikationer, behandling (DEGC) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomplikationerBehandlingDEGC | *Version*:2.14.0 |
| Active as of 2022-06-08 | *Computable Name*:KomplikationerBehandlingDEGC |

 
Komplikationer i forhold til DEGC operationer 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 13 concepts

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
  "id" : "KomplikationerBehandlingDEGC",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomplikationerBehandlingDEGC",
  "version" : "2.14.0",
  "name" : "KomplikationerBehandlingDEGC",
  "title" : "Komplikationer, behandling (DEGC)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-06-08T00:00:00+02:00",
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
  "description" : "Komplikationer i forhold til DEGC operationer",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
        "concept" : [
          {
            "code" : "ami",
            "display" : "AMI"
          },
          {
            "code" : "chylothorax",
            "display" : "Chylothorax"
          },
          {
            "code" : "fascierupture",
            "display" : "Fascieruptur"
          },
          {
            "code" : "ileus",
            "display" : "Ileus"
          },
          {
            "code" : "intrathoracicbleeding",
            "display" : "Intrathorakal blødning"
          },
          {
            "code" : "intraabdominalabscess",
            "display" : "Intraabdominal absces"
          },
          {
            "code" : "intraabdominalbleeding",
            "display" : "Intraabdominal blødning"
          },
          {
            "code" : "pulmonaryembolism",
            "display" : "Lungeemboli"
          },
          {
            "code" : "perforation",
            "display" : "Perforation"
          },
          {
            "code" : "pleuraexudate",
            "display" : "Pleuraeksudat"
          },
          {
            "code" : "pneumonia",
            "display" : "Pneumoni"
          },
          {
            "code" : "infection",
            "display" : "Sårinfektion"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "Andre"
          }
        ]
      }
    ]
  }
}

```
