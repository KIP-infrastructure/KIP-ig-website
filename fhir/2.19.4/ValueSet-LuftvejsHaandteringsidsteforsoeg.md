# Luftvejshåndtering sidste forsøg - KIP Infrastructure v2.19.4

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Luftvejshåndtering sidste forsøg**

## ValueSet: Luftvejshåndtering sidste forsøg (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LuftvejsHaandteringsidsteforsoeg | *Version*:2.19.4 |
| Active as of 2022-10-04 | *Computable Name*:LuftvejsHaandteringsidsteforsoeg |

 
Luftvejshåndtering sidste forsøg 

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
  "id" : "LuftvejsHaandteringsidsteforsoeg",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LuftvejsHaandteringsidsteforsoeg",
  "version" : "2.19.4",
  "name" : "LuftvejsHaandteringsidsteforsoeg",
  "title" : "Luftvejshåndtering sidste forsøg",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-10-04T00:00:00+02:00",
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
  "description" : "Luftvejshåndtering sidste forsøg",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Respiration",
      "concept" : [{
        "code" : "larynx_all",
        "display" : "LMA (alle typer)"
      },
      {
        "code" : "intub_dir_laryngo",
        "display" : "Direkte laryngoskopi"
      },
      {
        "code" : "intub_video_laryngo",
        "display" : "Videolaryngoskopi"
      },
      {
        "code" : "intub_flex_skop",
        "display" : "Fleksibelt skopi"
      },
      {
        "code" : "patient",
        "display" : "Vækning af patient"
      },
      {
        "code" : "tracheostomi",
        "display" : "Tracheostomi i LA"
      },
      {
        "code" : "tracheostomi_emg",
        "display" : "Nødtracheostomi"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden teknik"
      }]
    }]
  }
}

```
