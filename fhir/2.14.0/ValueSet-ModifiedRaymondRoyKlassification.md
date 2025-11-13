# Modified Raymond-Roy klassifikation (MRRC) - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modified Raymond-Roy klassifikation (MRRC)**

## ValueSet: Modified Raymond-Roy klassifikation (MRRC) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ModifiedRaymondRoyKlassification | *Version*:2.14.0 |
| Active as of 2022-06-29 | *Computable Name*:ModifiedRaymondRoyKlassification |

 
Modified Raymond-Roy klassifikation (MRRC) 

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
  "id" : "ModifiedRaymondRoyKlassification",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ModifiedRaymondRoyKlassification",
  "version" : "2.14.0",
  "name" : "ModifiedRaymondRoyKlassification",
  "title" : "Modified Raymond-Roy klassifikation (MRRC)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Modified Raymond-Roy klassifikation (MRRC)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/RaymondRoyClassification",
        "concept" : [
          {
            "code" : "classi",
            "display" : "I, komplet aflukning"
          },
          {
            "code" : "classii",
            "display" : "II, hals rest"
          },
          {
            "code" : "classiiia",
            "display" : "IIIa, rest aneurisme - kontrastopløb centralt i coilpakken"
          },
          {
            "code" : "classiiib",
            "display" : "IIIb, rest aneurisme - kontrastopløb langs aneurismevæggen"
          }
        ]
      }
    ]
  }
}

```
