# Sygdomsområder - alle - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sygdomsområder - alle**

## ValueSet: Sygdomsområder - alle (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SygdomsomraaderAlle | *Version*:2.14.2 |
| Active as of 2023-05-10 | *Computable Name*:SygdomsomraaderAlle |

 
Alle Sygdomsområder i KIP 

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
  "id" : "SygdomsomraaderAlle",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SygdomsomraaderAlle",
  "version" : "2.14.2",
  "name" : "SygdomsomraaderAlle",
  "title" : "Sygdomsområder - alle",
  "status" : "active",
  "experimental" : true,
  "date" : "2023-05-10T00:00:00+02:00",
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
  "description" : "Alle Sygdomsområder i KIP",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Sygdomsomraader",
        "concept" : [
          {
            "code" : "ald",
            "display" : "ALD"
          },
          {
            "code" : "cll",
            "display" : "CLL"
          },
          {
            "code" : "dad",
            "display" : "DAD"
          },
          {
            "code" : "damyda",
            "display" : "DAMYDA"
          },
          {
            "code" : "danaks",
            "display" : "DANAKS"
          },
          {
            "code" : "danarrest",
            "display" : "DANARREST"
          },
          {
            "code" : "dandem",
            "display" : "DANDEM"
          },
          {
            "code" : "danstroke",
            "display" : "DANSTROKE"
          },
          {
            "code" : "dccg",
            "display" : "DCCG"
          },
          {
            "code" : "degc",
            "display" : "DEGC"
          },
          {
            "code" : "dhd",
            "display" : "DHD"
          },
          {
            "code" : "dhdb",
            "display" : "DHDB"
          },
          {
            "code" : "dhr",
            "display" : "DHR"
          },
          {
            "code" : "dkr",
            "display" : "DKR"
          },
          {
            "code" : "dkrr",
            "display" : "DKRR"
          },
          {
            "code" : "dmpn",
            "display" : "DMPN"
          },
          {
            "code" : "dnsl",
            "display" : "DNSL"
          },
          {
            "code" : "dpd",
            "display" : "DPD"
          },
          {
            "code" : "dsr",
            "display" : "DSR"
          },
          {
            "code" : "dts",
            "display" : "DTS"
          },
          {
            "code" : "duga",
            "display" : "DUGA"
          },
          {
            "code" : "hofter",
            "display" : "HOFTER"
          },
          {
            "code" : "kar",
            "display" : "KAR"
          },
          {
            "code" : "lyfo",
            "display" : "LYFO"
          },
          {
            "code" : "mds",
            "display" : "MDS"
          },
          {
            "code" : "retspsyk",
            "display" : "RETSPSYK"
          },
          {
            "code" : "hemgenix",
            "display" : "HEMGENIX (Amgros)"
          }
        ]
      }
    ]
  }
}

```
