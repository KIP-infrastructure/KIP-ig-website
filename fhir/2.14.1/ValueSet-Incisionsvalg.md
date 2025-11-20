# Incisionsvalg - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Incisionsvalg**

## ValueSet: Incisionsvalg (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Incisionsvalg | *Version*:2.14.1 |
| Active as of 2022-06-08 | *Computable Name*:Incisionsvalg |

 
Incisionsvalg for kræft databaser (DEGC) 

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
  "id" : "Incisionsvalg",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Incisionsvalg",
  "version" : "2.14.1",
  "name" : "Incisionsvalg",
  "title" : "Incisionsvalg",
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
  "description" : "Incisionsvalg for kræft databaser (DEGC)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/IncisionChoice",
        "concept" : [
          {
            "code" : "abdomnial",
            "display" : "Abdominal adgang"
          },
          {
            "code" : "abdominal_thoracic",
            "display" : "Separat abdominal og torakal adgang"
          },
          {
            "code" : "toracoabdominal",
            "display" : "Torakabdominal adgang med deling af diafragma"
          },
          {
            "code" : "transhiatal_siewert",
            "display" : "Transhiatal adgang (a.m. Siewert)"
          },
          {
            "code" : "transhiatal_neck",
            "display" : "Transhiatal adgang og anastomose på hals"
          },
          {
            "code" : "abdominal_thoracoskopic",
            "display" : "Separat abdominal & torakoskopisk"
          },
          {
            "code" : "laparoscopic_thoracoskopic",
            "display" : "Laparoskopisk & torakoskopisk"
          },
          {
            "code" : "laparoscopic_thoracotomy",
            "display" : "Laparoskopisk & separat torakotomi"
          },
          {
            "code" : "laparoscopic",
            "display" : "Laparoskopisk"
          },
          {
            "code" : "endoscopic",
            "display" : "Endoskopisk"
          },
          {
            "code" : "cervical",
            "display" : "Cervikal adgang (frit tyndtarmstransplantat)"
          }
        ]
      }
    ]
  }
}

```
