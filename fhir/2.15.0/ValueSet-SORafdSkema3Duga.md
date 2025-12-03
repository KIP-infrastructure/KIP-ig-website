# SOR: afd_Skema3DUGA (DUGA) - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SOR: afd_Skema3DUGA (DUGA)**

## ValueSet: SOR: afd_Skema3DUGA (DUGA) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SORafdSkema3Duga | *Version*:2.15.0 |
| Active as of 2024-05-17 | *Computable Name*:SORafdSkema3Duga |

 
SOR: afd_Skema3DUGA (DUGA) 

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
  "id" : "SORafdSkema3Duga",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SORafdSkema3Duga",
  "version" : "2.15.0",
  "name" : "SORafdSkema3Duga",
  "title" : "SOR: afd_Skema3DUGA (DUGA)",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-05-17T00:00:00+02:00",
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
  "description" : "SOR: afd_Skema3DUGA (DUGA)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
        "concept" : [
          {
            "code" : "590021000016006",
            "display" : "Amager og Hvidovre Hospital, Gynækologisk sengeafdeling (590021000016006)"
          },
          {
            "code" : "590371000016007",
            "display" : "Amager og Hvidovre Hospital, Gynækologisk dagkirurgisk afsnit (590371000016007)"
          },
          {
            "code" : "265661000016007",
            "display" : "Bornholms Hospital, Kirurgisk sengeafd. (265661000016007)"
          },
          {
            "code" : "264671000016001",
            "display" : "Herlev og gentofte Hospital, Gynækologisk afdeling G-1 (264671000016001)"
          },
          {
            "code" : "264711000016000",
            "display" : "Herlev og gentofte Hospital, Gynækologisk ambulatorium G-1a (264711000016000)"
          },
          {
            "code" : "219021000016009",
            "display" : "Nordsjællands Hospital, HI Gynækologisk Afd., senge (219021000016009)"
          },
          {
            "code" : "218901000016007",
            "display" : "Nordsjællands Hospital, HI Gynækologisk Afd., amb. (218901000016007)"
          },
          {
            "code" : "976201000016009",
            "display" : "Rigshospitalet, Gynækologisk Klinik GYN, heldøgn (976201000016009)"
          },
          {
            "code" : "226461000016007",
            "display" : "Holbæk Gyn afd., HOL Gynækologisk Afd. (226461000016007)"
          },
          {
            "code" : "226531000016003",
            "display" : "Holbæk Gyn afd., HOL Gynækologisk Amb. (226531000016003)"
          },
          {
            "code" : "229981000016001",
            "display" : "Nykøbing F, NFS Gynækologisk Afd. (229981000016001)"
          },
          {
            "code" : "230071000016009",
            "display" : "Nykøbing F, NFS Gynækologisk Amb. (230071000016009)"
          },
          {
            "code" : "222641000016008",
            "display" : "Roskilde, ROS Gynækologisk Afd. (222641000016008)"
          },
          {
            "code" : "222751000016004",
            "display" : "Roskilde Gyn afd. (222751000016004)"
          },
          {
            "code" : "229441000016002",
            "display" : "Slagelse, SLA Gynækologisk Afd. (229441000016002)"
          },
          {
            "code" : "229591000016006",
            "display" : "Slagelse, SLA Gynækologisk Amb. (229591000016006)"
          },
          {
            "code" : "246971000016008",
            "display" : "Kolding Sygehus, SLB Kvindesygdomme og Fødsler (Kolding) (246971000016008)"
          },
          {
            "code" : "246931000016006",
            "display" : "Kolding Sygehus, SLB Kvindesygdomme Ambulatorium (Kolding) (246931000016006)"
          },
          {
            "code" : "238721000016006",
            "display" : "OUH Gynækologisk Afsnit (Odense) (238721000016006)"
          },
          {
            "code" : "238741000016001",
            "display" : "OUH Gynækologisk Ambulatorium (OUH Gynækologisk Ambulatorium (238741000016001))"
          },
          {
            "code" : "239391000016000",
            "display" : "OUH Kirurgisk Afsnit A (239391000016000)"
          },
          {
            "code" : "241141000016008",
            "display" : "OUH Urinvejskirurgisk Ambulatorium L (241141000016008)"
          },
          {
            "code" : "501671000016009",
            "display" : "SHS Kvindesygdomme Sengeafsnit (Aabenraa) (501671000016009)"
          },
          {
            "code" : "501711000016005",
            "display" : "SHS Kvindesygdomme Dagkirurgi (Sønderborg) (501711000016005)"
          },
          {
            "code" : "245971000016004",
            "display" : "SVS Kvindesygdomme Afsnit (Esbjerg) (245971000016004)"
          },
          {
            "code" : "245951000016006",
            "display" : "SVS Kvindesygdomme Ambulatorium (Esbjerg) (245951000016006)"
          },
          {
            "code" : "453211000016004",
            "display" : "AUH Kvindesygdomme (453211000016004)"
          },
          {
            "code" : "453221000016008",
            "display" : "AUH, Dagkirurgi - Kvindesygdomme og Fødsler (453221000016008)"
          },
          {
            "code" : "455661000016001",
            "display" : "AUH Urinvejskirurgi (455661000016001)"
          },
          {
            "code" : "507481000016002",
            "display" : "Hospitalsenhed Midt, Kvindesygdomme og Fødsler Viborg (507481000016002)"
          },
          {
            "code" : "485441000016009",
            "display" : "Hospitalsenhed Midt, Kvindeklinikken Viborg (485441000016009)"
          },
          {
            "code" : "899591000016008",
            "display" : "Regionshospitalet Gødstrup, Afsnit for Kvindesygdomme Gødstrup - RHG (899591000016008)"
          },
          {
            "code" : "899651000016003",
            "display" : "Regionshospitalet Gødstrup, Klinik for Kvindesygdomme Gødstrup - RHG (899651000016003)"
          },
          {
            "code" : "899781000016001",
            "display" : "Regionshospitalet Gødstrup, Kvindesygdomme Ambulant Kirurgi Gødstrup - RHG (899781000016001)"
          },
          {
            "code" : "265971000016007",
            "display" : "Regionshospitalet Horsens, Sengeafdeling for Kvindesygdomme og Fødsler (265971000016007)"
          },
          {
            "code" : "266001000016005",
            "display" : "Regionshospitalet Horsens, Dagkirurgi, Kvindesygdomme (266001000016005)"
          },
          {
            "code" : "271211000016002",
            "display" : "Regionshospitalet Randers, Kvindesygdomme og Fødsler - Randers (271211000016002)"
          },
          {
            "code" : "271221000016006",
            "display" : "Regionshospitalet Randers, Kvindesygdomsklinikken - Randers (271221000016006)"
          },
          {
            "code" : "275611000016002",
            "display" : "Aalborg Universitetshospital, Alb Gyn.-Obst. Afdeling (275611000016002)"
          },
          {
            "code" : "275641000016001",
            "display" : "Aalborg Universitetshospital, Alb Gyn. Ambulatorium (275641000016001)"
          },
          {
            "code" : "276431000016003",
            "display" : "Aalborg Universitetshospital, Alb Urologisk afd. (276431000016003)"
          },
          {
            "code" : "275661000016000",
            "display" : "Aalborg Universitetshospital, Hob Gyn. Ambulatorium Hobro (275661000016000)"
          },
          {
            "code" : "274781000016002",
            "display" : "Aalborg Universitetshospital, Thisted, Thy Gyn.-Obst. sengeafd. (274781000016002)"
          },
          {
            "code" : "277201000016005",
            "display" : "Regionshospital Nordjylland, Hjr Gyn.Obst. Amb. (277201000016005)"
          },
          {
            "code" : "277161000016004",
            "display" : "Regionshospital Nordjylland, Hjr Gyn.-Obst. Sengeafd. (277161000016004)"
          },
          {
            "code" : "464271000016003",
            "display" : "Regionshospital Nordjylland, Hjr Dagafsnit for Kvindesygdomme (464271000016003)"
          },
          {
            "code" : "606291000016007",
            "display" : "Regionshospital Nordjylland, Hjr Uro-gyn Amb (606291000016007)"
          },
          {
            "code" : "1041431000016004",
            "display" : "Adeas Parken (1041431000016004)"
          },
          {
            "code" : "492011000016005",
            "display" : "Aleris Privathospitaler, Esbjerg (492011000016005)"
          },
          {
            "code" : "652991000016006",
            "display" : "Aleris Privathospitaler, Ringsted (652991000016006)"
          },
          {
            "code" : "491731000016006",
            "display" : "Aleris Privathospitaler, København (491731000016006)"
          },
          {
            "code" : "491911000016003",
            "display" : "Aleris Privathospitaler, Aalborg (491911000016003)"
          },
          {
            "code" : "491831000016002",
            "display" : "Aleris Hospitaler, Aarhus, urologi og gynækologi (491831000016002)"
          },
          {
            "code" : "302311000016004",
            "display" : "AROS privathospital, beh. Afsnit (302311000016004)"
          },
          {
            "code" : "293191000016008",
            "display" : "Capio A/S - Hellerup sengeafsnit (293191000016008)"
          },
          {
            "code" : "293271000016004",
            "display" : "Capio A/S - Odense sengeafsnit (293271000016004)"
          },
          {
            "code" : "596991000016007",
            "display" : "Capio A/S - Odense ambulatorium (596991000016007)"
          },
          {
            "code" : "688881000016009",
            "display" : "CPH Privathospital A/S, kirurgisk afsnit (688881000016009)"
          },
          {
            "code" : "299421000016004",
            "display" : "Gråbrødreklinikken, beh. afsnit (299421000016004)"
          },
          {
            "code" : "293511000016005",
            "display" : "Privathospitalet Danmark, Charlottenlund (293511000016005)"
          },
          {
            "code" : "574681000016001",
            "display" : "Privathospitalet Mølholm Aarhus, Højbjerg beh.afsnit (574681000016001)"
          },
          {
            "code" : "300771000016007",
            "display" : "Privathospitalet Mølholm Vejle, beh. afsnit (300771000016007)"
          },
          {
            "code" : "298241000016003",
            "display" : "Privathospitalet Møn, Gynækologisk sengeafsnit (298241000016003)"
          },
          {
            "code" : "1048581000016009",
            "display" : "Søernes Privathospital, beh.afsnit (1048581000016009)"
          },
          {
            "code" : "106021000016002",
            "display" : "Aagaard Gynækologiske Klinik (106021000016002)"
          }
        ]
      }
    ]
  }
}

```
